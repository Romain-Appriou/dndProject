<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/classes' => [[['_route' => 'app_classes_index', '_controller' => 'App\\Controller\\ClassesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/classes/new' => [[['_route' => 'app_classes_new', '_controller' => 'App\\Controller\\ClassesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dons' => [[['_route' => 'app_dons_index', '_controller' => 'App\\Controller\\DonsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dons/new' => [[['_route' => 'app_dons_new', '_controller' => 'App\\Controller\\DonsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/races' => [[['_route' => 'app_races_index', '_controller' => 'App\\Controller\\RacesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/races/new' => [[['_route' => 'app_races_new', '_controller' => 'App\\Controller\\RacesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sorts' => [[['_route' => 'app_sorts_index', '_controller' => 'App\\Controller\\SortsController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/sorts/new' => [[['_route' => 'app_sorts_new', '_controller' => 'App\\Controller\\SortsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/classes/([^/]++)(?'
                    .'|(*:27)'
                    .'|/edit(*:39)'
                    .'|(*:46)'
                .')'
                .'|/dons/([^/]++)(?'
                    .'|(*:71)'
                    .'|/edit(*:83)'
                    .'|(*:90)'
                .')'
                .'|/races/([^/]++)(?'
                    .'|(*:116)'
                    .'|/edit(*:129)'
                    .'|(*:137)'
                .')'
                .'|/sorts/([^/]++)(?'
                    .'|(*:164)'
                    .'|/edit(*:177)'
                    .'|(*:185)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:225)'
                    .'|wdt/([^/]++)(*:245)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:291)'
                            .'|router(*:305)'
                            .'|exception(?'
                                .'|(*:325)'
                                .'|\\.css(*:338)'
                            .')'
                        .')'
                        .'|(*:348)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_classes_show', '_controller' => 'App\\Controller\\ClassesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        39 => [[['_route' => 'app_classes_edit', '_controller' => 'App\\Controller\\ClassesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        46 => [[['_route' => 'app_classes_delete', '_controller' => 'App\\Controller\\ClassesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        71 => [[['_route' => 'app_dons_show', '_controller' => 'App\\Controller\\DonsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_dons_edit', '_controller' => 'App\\Controller\\DonsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [[['_route' => 'app_dons_delete', '_controller' => 'App\\Controller\\DonsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        116 => [[['_route' => 'app_races_show', '_controller' => 'App\\Controller\\RacesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        129 => [[['_route' => 'app_races_edit', '_controller' => 'App\\Controller\\RacesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        137 => [[['_route' => 'app_races_delete', '_controller' => 'App\\Controller\\RacesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        164 => [[['_route' => 'app_sorts_show', '_controller' => 'App\\Controller\\SortsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        177 => [[['_route' => 'app_sorts_edit', '_controller' => 'App\\Controller\\SortsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        185 => [[['_route' => 'app_sorts_delete', '_controller' => 'App\\Controller\\SortsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        225 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        245 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        291 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        305 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        325 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        338 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        348 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
