<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//PASIEN
$routes->get('/pasien', 'PasienController::index');
$routes->get('/pasien/create', 'PasienController::create');
$routes->post('/pasien/store', 'PasienController::store');
$routes->get('/pasien/edit/(:num)', 'PasienController::edit/$1');
$routes->post('/pasien/update/(:num)', 'PasienController::update/$1');
$routes->get('/pasien/delete/(:num)', 'PasienController::delete/$1');
$routes->get('/pasien/import', 'PasienController::importForm');
$routes->post('/pasien/import', 'PasienController::importExcel');
$routes->get('pasien/download-template', 'PasienController::downloadTemplate');

//DASHBOARD
$routes->get('dashboard', 'DashboardController::index');

//DATA INACTIVE
$routes->get('/data-inactive', 'DataInactive::index');
$routes->get('data-inactive/uploadnilaiguna/(:num)', 'DataInactive::uploadnilaiguna/$1');
$routes->post('data-inactive/storeNilaiGuna', 'DataInactive::storeNilaiGuna');
$routes->get('/data-inactive/export-pdf', 'DataInactive::exportPDF');

//DATA ACTIVE
$routes->get('/data-active', 'DataActive::index');
$routes->get('data-active/cetak-laporan', 'DataActive::printActivePatients');

//DATA DIARSIPKAN
$routes->get('/data-diarsipkan', 'DataDiarsipkanController::index');
$routes->get('data-diarsipkan/lihat-data/(:num)', 'DataDiarsipkanController::lihatData/$1');
$routes->get('laporan/(:num)', 'DataDiarsipkanController::laporan/$1');
$routes->get('uploads/nilai_guna/(:num)/(:any)', 'UploadController::viewFile/$1/$2');
$routes->post('/data-diarsipkan/tambah-ke-bap/(:num)', 'DataDiarsipkanController::tambahKeBap/$1');
$routes->get('hapus-pasien/(:num)', 'DataDiarsipkanController::hapus/$1');

//DATA SIAP DI MUSNAHAKAN
$routes->get('/data-siapdimusnahkan', 'DataSiapDimusnahkan::index');
$routes->post('/data-siapdimusnahkan/bapkerjasama', 'DataSiapDimusnahkan::bapkerjasama');
$routes->post('/data-siapdimusnahkan/bapnonkerjasama', 'DataSiapDimusnahkan::bapnonkerjasama');
$routes->get('data-siapdimusnahkan/pemusnahan', 'DataSiapDimusnahkan::pemusnahan');

//DATA BAP
$routes->get('/bap', 'BapController::index');
$routes->get('upload/viewBAPFile/(:segment)/(:segment)', 'UploadController::viewBAPFile/$1/$2');
$routes->get('/bap/create/(:any)', 'BapController::create/$1');
$routes->post('/bap', 'BapController::store');
$routes->get('/bap/(:num)', 'BapController::show/$1');
$routes->get('/bap/edit/(:num)', 'BapController::edit/$1');
$routes->post('/bap/update/(:num)', 'BapController::update/$1');
$routes->get('/bap/delete/(:num)', 'BapController::delete/$1');
$routes->get('lampiran', 'UploadController::lampiran');
$routes->get('downloadLampiran/(:any)', 'UploadController::downloadLampiran/$1');


//USER
$routes->get('/users', 'UserController::index');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/users/update/(:num)', 'UserController::update/$1');
$routes->get('/users/delete/(:num)', 'UserController::delete/$1');

//LOGIN
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/login', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');
$routes->get('manualbook', 'AuthController::manualBook');

//LOG ACTIVITY
$routes->get('/log-activity', 'LogActivity::index');
