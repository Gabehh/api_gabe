<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::homeRedirect'], null, null, null, false, false, null]],
        '/api/v1/login_check' => [[['_route' => 'app_security_logincheck', '_controller' => 'App\\Controller\\SecurityController::logincheckAction'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/v1/(?'
                    .'|results(?'
                        .'|(?:\\.(json|xml))?(?'
                            .'|(*:48)'
                        .')'
                        .'|/(?'
                            .'|(\\d+)(?:\\.(json|xml))?(*:82)'
                            .'|user/(\\d+)(?:\\.(json|xml))?(*:116)'
                            .'|(\\d+)(?:\\.(json|xml))?(?'
                                .'|(*:149)'
                            .')'
                            .'|user/(\\d+)(?:\\.(json|xml))?(*:185)'
                        .')'
                        .'|(?:/(\\d+)(?:\\.(json|xml))?)?(*:222)'
                    .')'
                    .'|users(?'
                        .'|(?:\\.(json|xml))?(*:256)'
                        .'|/(\\d+)(?:\\.(json|xml))?(*:287)'
                        .'|(?:/(\\d+)(?:\\.(json|xml))?)?(*:323)'
                        .'|/(\\d+)(?:\\.(json|xml))?(*:354)'
                        .'|(?:\\.(json|xml))?(*:379)'
                        .'|/(\\d+)(?:\\.(json|xml))?(*:410)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        48 => [
            [['_route' => 'api_result_cget', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResults'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_result_post', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::createResult'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        82 => [[['_route' => 'api_result_get', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResult'], ['resultId', '_format'], ['GET' => 0], null, false, true, null]],
        116 => [[['_route' => 'api_result_userget', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResultsByUser'], ['userId', '_format'], ['GET' => 0], null, false, true, null]],
        149 => [
            [['_route' => 'api_result_put', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::updateResult'], ['resultId', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_result_delete', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::deleteResult'], ['resultId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        185 => [[['_route' => 'api_result_userdelete', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::deleteResultByUser'], ['userId', '_format'], ['DELETE' => 0], null, false, true, null]],
        222 => [[['_route' => 'api_result_options', 'resultId' => 0, '_format' => 'json', '_controller' => 'App\\Controller\\ApiResultController::optionsAction'], ['resultId', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        256 => [[['_route' => 'api_users_cget', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::cgetAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'api_users_get', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::getAction'], ['userId', '_format'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'api_users_options', 'userId' => 0, '_format' => 'json', '_controller' => 'App\\Controller\\ApiUsersController::optionsAction'], ['userId', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        354 => [[['_route' => 'api_users_delete', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::deleteAction'], ['userId', '_format'], ['DELETE' => 0], null, false, true, null]],
        379 => [[['_route' => 'api_users_post', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::postAction'], ['_format'], ['POST' => 0], null, false, true, null]],
        410 => [
            [['_route' => 'api_users_put', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::putAction'], ['userId', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
