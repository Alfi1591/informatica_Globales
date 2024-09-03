<?php

use Illuminate\Support\Facades\Route;

// Charts routes
Route::view('/charts/apexcharts', 'administrativa.charts-apexcharts');
Route::view('/charts/chartjs', 'administrativa.charts-chartjs');
Route::view('/charts/echarts', 'administrativa.charts-echarts');

// Components routes
Route::view('/components/accordion', 'administrativa.components-accordion');
Route::view('/components/alerts', 'administrativa.components-alerts');
Route::view('/components/badges', 'administrativa.components-badges');
Route::view('/components/breadcrumbs', 'administrativa.components-breadcrumbs');
Route::view('/components/buttons', 'administrativa.components-buttons');
Route::view('/components/cards', 'administrativa.components-cards');
Route::view('/components/carousel', 'administrativa.components-carousel');
Route::view('/components/list-group', 'administrativa.components-list-group');
Route::view('/components/modal', 'administrativa.components-modal');
Route::view('/components/pagination', 'administrativa.components-pagination');
Route::view('/components/progress', 'administrativa.components-progress');
Route::view('/components/spinners', 'administrativa.components-spinners');
Route::view('/components/tabs', 'administrativa.components-tabs');
Route::view('/components/tooltips', 'administrativa.components-tooltips');

// Forms routes
Route::view('/forms/editors', 'administrativa.forms-editors');
Route::view('/forms/elements', 'administrativa.forms-elements');
Route::view('/forms/layouts', 'administrativa.forms-layouts');
Route::view('/forms/validation', 'administrativa.forms-validation');

// Icons routes
Route::view('/icons/bootstrap', 'administrativa.icons-bootstrap');
Route::view('/icons/boxicons', 'administrativa.icons-boxicons');
Route::view('/icons/remix', 'administrativa.icons-remix');

// Pages routes
Route::view('/pages/blank', 'administrativa.pages-blank');
Route::view('/pages/contact', 'administrativa.pages-contact');
Route::view('/pages/error-404', 'administrativa.pages-error-404');
Route::view('/pages/faq', 'administrativa.pages-faq');
Route::view('/pages/login', 'administrativa.pages-login');
Route::view('/pages/register', 'administrativa.pages-register');

// Index route
Route::view('/', 'administrativa.index');



