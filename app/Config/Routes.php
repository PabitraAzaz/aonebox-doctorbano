<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');

$routes->get('blogs', 'Home::blogs');

$routes->get('blog/(:num)', 'Home::singleBlog/$1');

$routes->get('universities', 'Home::universities');

// University page that can work with or without a key/slug/id
$routes->get('single-university', 'Home::singleUniversity');
$routes->get('single-university/(:segment)',  'Home::singleUniversity/$1');

// =======================
// Admin Panel Routes
// =======================
$routes->group('admin', function ($routes) {

    // Dashboard
    $routes->get('dashboard', 'AdminController\Dashboard::index');

    // =======================
    // Blog Management Routes
    // =======================
    $routes->group('blog', function ($routes) {
        $routes->get('/',              'AdminController\BlogController::index');
        $routes->get('create',         'AdminController\BlogController::create');
        $routes->post('save',          'AdminController\BlogController::save');
        $routes->get('edit/(:num)',    'AdminController\BlogController::edit/$1');
        $routes->post('update/(:num)', 'AdminController\BlogController::update/$1');
        $routes->get('delete/(:num)',  'AdminController\BlogController::delete/$1');
    });

    // =========================
    // University Management Routes
    // =========================
    $routes->group('university', function ($routes) {
        $routes->get('/',              'AdminController\UniversityController::index');
        $routes->get('create',         'AdminController\UniversityController::create');
        $routes->post('save',          'AdminController\UniversityController::save');
        $routes->get('edit/(:num)',    'AdminController\UniversityController::edit/$1');
        $routes->post('update/(:num)', 'AdminController\UniversityController::update/$1');
        $routes->get('delete/(:num)',  'AdminController\UniversityController::delete/$1');
    });
});

$routes->get('faq', 'Home::faq');
$routes->get('privacy-policy', 'Home::privacyPolicy');
$routes->get('terms-conditions', 'Home::termsConditions');
$routes->get('payment-refund', 'Home::paymentRefund');