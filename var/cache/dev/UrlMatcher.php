<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::homeRedirect'], null, null, null, false, false, null]],
        '/api/v1/login_check' => [[['_route' => 'app_security_logincheck', '_controller' => 'App\\Controller\\SecurityController::logincheckAction'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api/v1/(?'
                    .'|results(?'
                        .'|(?:\\.(json|xml))?(?'
                            .'|(*:210)'
                        .')'
                        .'|/(?'
                            .'|(\\d+)(?:\\.(json|xml))?(*:245)'
                            .'|user/(\\d+)(?:\\.(json|xml))?(*:280)'
                            .'|(\\d+)(?:\\.(json|xml))?(?'
                                .'|(*:313)'
                            .')'
                            .'|user/(\\d+)(?:\\.(json|xml))?(*:349)'
                        .')'
                        .'|(?:/(\\d+)(?:\\.(json|xml))?)?(*:386)'
                    .')'
                    .'|users(?'
                        .'|(?:\\.(json|xml))?(*:420)'
                        .'|/(\\d+)(?:\\.(json|xml))?(*:451)'
                        .'|(?:/(\\d+)(?:\\.(json|xml))?)?(*:487)'
                        .'|/(\\d+)(?:\\.(json|xml))?(*:518)'
                        .'|(?:\\.(json|xml))?(*:543)'
                        .'|/(\\d+)(?:\\.(json|xml))?(*:574)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        210 => [
            [['_route' => 'api_result_cget', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResults'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_result_post', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::createResult'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        245 => [[['_route' => 'api_result_get', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResult'], ['resultId', '_format'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'api_result_userget', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResultsByUser'], ['userId', '_format'], ['GET' => 0], null, false, true, null]],
        313 => [
            [['_route' => 'api_result_put', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::updateResult'], ['resultId', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_result_delete', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::deleteResult'], ['resultId', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        349 => [[['_route' => 'api_result_userdelete', '_format' => null, '_controller' => 'App\\Controller\\ApiResultController::deleteResultByUser'], ['userId', '_format'], ['DELETE' => 0], null, false, true, null]],
        386 => [[['_route' => 'api_result_options', 'resultId' => 0, '_format' => 'json', '_controller' => 'App\\Controller\\ApiResultController::optionsAction'], ['resultId', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        420 => [[['_route' => 'api_users_cget', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::cgetAction'], ['_format'], ['GET' => 0], null, false, true, null]],
        451 => [[['_route' => 'api_users_get', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::getAction'], ['userId', '_format'], ['GET' => 0], null, false, true, null]],
        487 => [[['_route' => 'api_users_options', 'userId' => 0, '_format' => 'json', '_controller' => 'App\\Controller\\ApiUsersController::optionsAction'], ['userId', '_format'], ['OPTIONS' => 0], null, false, true, null]],
        518 => [[['_route' => 'api_users_delete', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::deleteAction'], ['userId', '_format'], ['DELETE' => 0], null, false, true, null]],
        543 => [[['_route' => 'api_users_post', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::postAction'], ['_format'], ['POST' => 0], null, false, true, null]],
        574 => [
            [['_route' => 'api_users_put', '_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::putAction'], ['userId', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
