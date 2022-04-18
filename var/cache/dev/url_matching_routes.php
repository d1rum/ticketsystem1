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
        '/admin' => [[['_route' => 'admin_backend', '_controller' => 'App\\Controller\\Backend\\BackendController::index'], null, null, null, false, false, null]],
        '/admin/category/list' => [[['_route' => 'admin_category_list', '_controller' => 'App\\Controller\\Backend\\Category\\CategoryController::list'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'admin_category_create', '_controller' => 'App\\Controller\\Backend\\Category\\CategoryController::create'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\Backend\\Login\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\Backend\\Login\\SecurityController::logout'], null, null, null, false, false, null]],
        '/ticket' => [[['_route' => 'ticket_list', '_controller' => 'App\\Controller\\Backend\\Ticket\\TicketController::backendindex'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_frontend', '_controller' => 'App\\Controller\\Frontend\\FrontendController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Frontend\\Login\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Frontend\\Login\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\Frontend\\Profile\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\Frontend\\Profile\\ProfileController::edit'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Frontend\\Register\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\Frontend\\Register\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/creaticket' => [[['_route' => 'create_ticket', '_controller' => 'App\\Controller\\Frontend\\ticket\\TicketFrontendController::create'], null, null, null, false, false, null]],
        '/userticket' => [[['_route' => 'user_ticket_list', '_controller' => 'App\\Controller\\Frontend\\ticket\\TicketFrontendController::userindex'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:45)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:75)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:110)'
                        .')'
                    .')'
                    .'|dmin/category/(?'
                        .'|edit/([^/]++)(*:150)'
                        .'|delete/([^/]++)(*:173)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:214)'
                    .'|wdt/([^/]++)(*:234)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:280)'
                            .'|router(*:294)'
                            .'|exception(?'
                                .'|(*:314)'
                                .'|\\.css(*:327)'
                            .')'
                        .')'
                        .'|(*:337)'
                    .')'
                .')'
                .'|/editticket/([^/]++)(*:367)'
                .'|/deleteticket/([^/]++)(*:397)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        75 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        110 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        150 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Backend\\Category\\CategoryController::edit'], ['id'], null, null, false, true, null]],
        173 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Backend\\Category\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        214 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        234 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        280 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        294 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        314 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        327 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        337 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        367 => [[['_route' => 'edit_admin_ticket', '_controller' => 'App\\Controller\\Backend\\Ticket\\TicketController::edit'], ['id'], null, null, false, true, null]],
        397 => [
            [['_route' => 'delete_admin_ticket', '_controller' => 'App\\Controller\\Backend\\Ticket\\TicketController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
