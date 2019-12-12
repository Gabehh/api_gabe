<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    private const HELP_TEXT = <<< MARCA_FIN
    This command allows you to add a new user.
    ej: bin/console miw:create-user "admin1@miw.upm.es" "*MyPa44w0r6*" true

MARCA_FIN;

    /**
     * @var string The name of the command (the part after "bin/console")
     */
    protected static $defaultName = 'miw:create-user';

    /** @var EntityManagerInterface $entityManager */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    /**
     * Configures the current command.
     */
    protected function configure(): void
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a new user')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp(self::HELP_TEXT)
            ->addArgument(
                'useremail',
                InputArgument::REQUIRED,
                'User e-mail'
            )
            ->addArgument(
                'password',
                InputArgument::REQUIRED,
                'User password'
            )
            ->addArgument(
                'roleAdmin',
                InputArgument::OPTIONAL,
                'Has role Admin',
                false
            );
    }

    /**
     * Executes the current command.
     *
     * This method is not abstract because you can use this class
     * as a concrete class. In this case, instead of defining the
     * execute() method, you set the code to execute by passing
     * a Closure to the setCode() method.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int 0 if everything went fine, or an exit code
     *
     * @see setCode()
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $useremail = $input->getArgument('useremail');
        if ($input->hasArgument('roleAdmin') && strcasecmp('true', $input->getArgument('roleAdmin')) === 0) {
               $roleAdmin = [ 'ROLE_ADMIN'];
        } else {
            $roleAdmin = [];
        }
        $user = new User(
            $useremail,
            $input->getArgument('password'),
            $roleAdmin
        );

        try {
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        } catch (Exception $exception) {
            $output->writeln([
                'error' => $exception->getCode(),
                'message' => $exception->getMessage()
            ]);

            return $exception->getCode();
        }

        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'User Creator',
            '============',
            "Created user '$useremail' with id: " . $user->getId(),
            ''
        ]);

        return 0;
    }
}
