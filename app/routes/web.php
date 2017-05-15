<?php

/**
 * --------------------------------------------------
 *  The main router
 * --------------------------------------------------
 *
 * You can place all your routes here. You can place
 * groups, map requests, or slim specific GET, POST,
 * HEAD, PATCH, DELETE requests too.
 *
 * @see https://www.slimframework.com/docs/objects/router.html
 */

$app->get('/', 'HomeController:index');
