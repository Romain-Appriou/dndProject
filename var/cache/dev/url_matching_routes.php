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
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/races' => [[['_route' => 'app_races_index', '_controller' => 'App\\Controller\\RacesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/races/new' => [[['_route' => 'app_races_new', '_controller' => 'App\\Controller\\RacesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sorts' => [[['_route' => 'app_sorts_index', '_controller' => 'App\\Controller\\SortsController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/races/([^/]++)(?'
                    .'|(*:72)'
                    .'|/edit(*:84)'
                    .'|(*:91)'
                .')'
                .'|/sorts/([^/]++)(?'
                    .'|(*:117)'
                    .'|/edit(*:130)'
                    .'|(*:138)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:178)'
                    .'|wdt/([^/]++)(*:198)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:244)'
                            .'|router(*:258)'
                            .'|exception(?'
                                .'|(*:278)'
                                .'|\\.css(*:291)'
                            .')'
                        .')'
                        .'|(*:301)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_classes_show', '_controller' => 'App\\Controller\\ClassesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        39 => [[['_route' => 'app_classes_edit', '_controller' => 'App\\Controller\\ClassesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        46 => [[['_route' => 'app_classes_delete', '_controller' => 'App\\Controller\\ClassesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        72 => [[['_route' => 'app_races_show', '_controller' => 'App\\Controller\\RacesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_races_edit', '_controller' => 'App\\Controller\\RacesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        91 => [[['_route' => 'app_races_delete', '_controller' => 'App\\Controller\\RacesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'app_sorts_show', '_controller' => 'App\\Controller\\SortsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        130 => [[['_route' => 'app_sorts_edit', '_controller' => 'App\\Controller\\SortsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        138 => [[['_route' => 'app_sorts_delete', '_controller' => 'App\\Controller\\SortsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        178 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        198 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        244 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        258 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        278 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        291 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        301 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
