<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

// Route::get('/belajar', function() {
//     echo "<h1>Hello World</h1>";
//     echo "<p>Sedang belajar laravel</p>";
// });

Route::get('siswa', 'SiswaController@index');

// route new
Route::get('', 'BlogController@home');
Route::get('/tentang', 'BlogController@tentang');
Route::get('/kontak', 'BlogController@kontak');
Route::get('/ourservice', 'BlogController@ourservice');
Route::get('/carakerja', 'BlogController@carakerja');
Route::get('/contact', 'BlogController@contact');
Route::get('/faq', 'BlogController@faq');

// route sidemenu
Route::get('/kalkulator', 'SideMenuCotroller@menuKalkulator');
Route::get('/pembayaran', 'SideMenuCotroller@menuPembayaran');
Route::get('/dailyquotes', 'SideMenuCotroller@menuDailyQuotes');
Route::get('/hubkerjasama', 'SideMenuCotroller@menuHubKerjaSama');
Route::get('/warehousing', 'SideMenuCotroller@menuWarehousing');
Route::get('/trucking', 'SideMenuCotroller@menuTrucking');
Route::get('/cekresi', 'SideMenuCotroller@menuCekResi');