<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');

$routes->get('blogs', 'Home::blogs');
$routes->get('single_blog/(:num)', 'Home::single_blog/$1');

$routes->get('universities', 'Home::universities');
$routes->get('single_university', 'Home::singleUniversity');

// $routes->get('university/(:num)','Home::university/$1');





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
        $routes->get('/', 'AdminController\BlogController::index');           // List all blogs
        $routes->get('create', 'AdminController\BlogController::create');     // Show create form
        $routes->post('save', 'AdminController\BlogController::save');        // Save new blog
        $routes->get('edit/(:num)', 'AdminController\BlogController::edit/$1'); // Show edit form
        $routes->post('update/(:num)', 'AdminController\BlogController::update/$1'); // Update blog
        $routes->get('delete/(:num)', 'AdminController\BlogController::delete/$1'); // Delete blog
    });

    // =========================
    // University Management Routes
    // =========================
    $routes->group('university', function ($routes) {
        $routes->get('/', 'AdminController\UniversityController::index');             // List all universities
        $routes->get('create', 'AdminController\UniversityController::create');       // Show create form
        $routes->post('save', 'AdminController\UniversityController::save');          // Save new university
        $routes->get('edit/(:num)', 'AdminController\UniversityController::edit/$1'); // Show edit form
        $routes->post('update/(:num)', 'AdminController\UniversityController::update/$1'); // Update university
        $routes->get('delete/(:num)', 'AdminController\UniversityController::delete/$1'); // Delete university
    });
});


$routes->get('faq', 'Home::faq');
$routes->get('privacy-policy', 'Home::privacyPolicy');
$routes->get('terms-conditions', 'Home::termsConditions');
$routes->get('payment-refund', 'Home::paymentRefund');
