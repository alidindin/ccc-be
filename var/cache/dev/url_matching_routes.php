<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/events' => [
            [['_route' => 'get_all_events', '_controller' => 'App\\Controller\\EventController::getAllEvents'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_event', '_controller' => 'App\\Controller\\EventController::addEvent'], null, ['POST' => 0], null, false, false, null],
        ],
        '/email' => [[['_route' => 'send_email', '_controller' => 'App\\Controller\\MailController::sendEmail'], null, ['GET' => 0], null, false, false, null]],
        '/users' => [
            [['_route' => 'get_all_users', '_controller' => 'App\\Controller\\UserController::getAllUsers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/events/([^/]++)(?'
                    .'|(*:61)'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:87)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [
            [['_route' => 'get_one_event', '_controller' => 'App\\Controller\\EventController::getEvent'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_event', '_controller' => 'App\\Controller\\EventController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_event', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        87 => [
            [['_route' => 'get_one_user', '_controller' => 'App\\Controller\\UserController::getUser'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
