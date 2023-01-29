<?php

use App\Http\Controllers\{
    PageController,
    NewsletterController,
    SitemapXmlController,
};
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::post('/newsletters/add', [NewsletterController::class, 'add'])->name('newsletters.add');
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index'])->name('sitemap');
