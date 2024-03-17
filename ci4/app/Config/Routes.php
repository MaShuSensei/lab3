<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News; // Add this line

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
use App\Controllers\Pages;
$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/(:segment)', [News::class, 'show']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
