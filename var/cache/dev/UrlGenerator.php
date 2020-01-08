<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'api_result_cget' => [['_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResults'], ['_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['text', '/api/v1/results']], [], []],
    'api_result_post' => [['_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiResultController::createResult'], ['_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['text', '/api/v1/results']], [], []],
    'api_result_get' => [['resultId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResult'], ['resultId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'resultId'], ['text', '/api/v1/results']], [], []],
    'api_result_userget' => [['userId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiResultController::getResultsByUser'], ['userId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'userId'], ['text', '/api/v1/results/user']], [], []],
    'api_result_put' => [['resultId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiResultController::updateResult'], ['resultId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'resultId'], ['text', '/api/v1/results']], [], []],
    'api_result_delete' => [['resultId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiResultController::deleteResult'], ['resultId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'resultId'], ['text', '/api/v1/results']], [], []],
    'api_result_userdelete' => [['userId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiResultController::deleteResultByUser'], ['userId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'userId'], ['text', '/api/v1/results/user']], [], []],
    'api_result_options' => [['resultId', '_format'], ['resultId' => 0, '_format' => 'json', '_controller' => 'App\\Controller\\ApiResultController::optionsAction'], ['resultId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'resultId'], ['text', '/api/v1/results']], [], []],
    'api_users_cget' => [['_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::cgetAction'], ['_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['text', '/api/v1/users']], [], []],
    'api_users_get' => [['userId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::getAction'], ['userId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'userId'], ['text', '/api/v1/users']], [], []],
    'api_users_options' => [['userId', '_format'], ['userId' => 0, '_format' => 'json', '_controller' => 'App\\Controller\\ApiUsersController::optionsAction'], ['userId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'userId'], ['text', '/api/v1/users']], [], []],
    'api_users_delete' => [['userId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::deleteAction'], ['userId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'userId'], ['text', '/api/v1/users']], [], []],
    'api_users_post' => [['_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::postAction'], ['_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['text', '/api/v1/users']], [], []],
    'api_users_put' => [['userId', '_format'], ['_format' => null, '_controller' => 'App\\Controller\\ApiUsersController::putAction'], ['userId' => '\\d+', '_format' => 'json|xml'], [['variable', '.', 'json|xml', '_format'], ['variable', '/', '\\d+', 'userId'], ['text', '/api/v1/users']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::homeRedirect'], [], [['text', '/']], [], []],
    'app_security_logincheck' => [[], ['_controller' => 'App\\Controller\\SecurityController::logincheckAction'], [], [['text', '/api/v1/login_check']], [], []],
];
