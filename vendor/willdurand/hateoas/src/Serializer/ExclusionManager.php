<?php

declare(strict_types=1);

namespace Hateoas\Serializer;

use Hateoas\Configuration\Exclusion;
use Hateoas\Configuration\Relation;
use Hateoas\Serializer\Metadata\RelationPropertyMetadata;
use JMS\Serializer\Exclusion\ExpressionLanguageExclusionStrategy;
use JMS\Serializer\SerializationContext;

class ExclusionManager
{
    /**
     * @var ExpressionLanguageExclusionStrategy
     */
    private $expressionExclusionStrategy;

    public function __construct(ExpressionLanguageExclusionStrategy $expressionLanguageExclusionStrategy)
    {
        $this->expressionExclusionStrategy = $expressionLanguageExclusionStrategy;
    }

    public function shouldSkipLink(object $object, Relation $relation, SerializationContext $context): bool
    {
        if ($this->shouldSkipRelation($relation, $context)) {
            return true;
        }

        if (null === $relation->getHref()) {
            return true;
        }

        return false;
    }

    public function shouldSkipEmbedded(object $object, Relation $relation, SerializationContext $context): bool
    {
        if (null === $relation->getEmbedded()) {
            return true;
        }

        if (null === $relation->getEmbedded()->getExclusion()) {
            return $this->shouldSkipRelation($relation, $context);
        }

        return $this->shouldSkip($relation, $relation->getEmbedded()->getExclusion(), $context);
    }

    private function shouldSkipRelation(Relation $relation, SerializationContext $context): bool
    {
        return $this->shouldSkip($relation, $relation->getExclusion(), $context);
    }

    private function shouldSkip(Relation $relation, ?Exclusion $exclusion = null, SerializationContext $context): bool
    {
        $propertyMetadata = new RelationPropertyMetadata($exclusion, $relation);
        if ($context->getExclusionStrategy()) {
            if ($context->getExclusionStrategy()->shouldSkipProperty($propertyMetadata, $context)) {
                return true;
            }
        }

        if (null !== $exclusion
            && null !== $exclusion->getExcludeIf()
            && $this->expressionExclusionStrategy->shouldSkipProperty($propertyMetadata, $context)
        ) {
            return true;
        }

        return false;
    }
}
