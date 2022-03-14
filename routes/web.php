<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ColumnsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\FullscreenController;
use App\Http\Controllers\FullWidthController;
use App\Http\Controllers\GalleryFaderController;
use App\Http\Controllers\GallerySimpleController;
use App\Http\Controllers\ImageFrontpageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\NivoController;
use App\Http\Controllers\PhotoGridController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
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

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;

// Route::get('/', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

// Route::get('/articles/{id}', [ArticleController::class,'articles']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/nivo', [NivoController::class, 'index'])->name('nivo');

Route::get('/ei-slider', [SliderController::class, 'index'])->name('slider');

Route::get('/fullscreen-gallery', [FullscreenController::class, 'index'])->name('fullscreen-gallery');

Route::get('/image-frontpage', [ImageFrontpageController::class, 'index'])->name('image-frontpage');

Route::get('/magazine', [MagazineController::class, 'index'])->name('magazine');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/full-width', [FullWidthController::class, 'index'])->name('full-width');

Route::get('/columns', [ColumnsController::class, 'index'])->name('columns');

Route::get('/elements', [ElementsController::class, 'index'])->name('elements');

Route::get('/gallery-simple', [GallerySimpleController::class, 'index'])->name('gallery-simple');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/gallery-fader', [GalleryFaderController::class, 'index'])->name('gallery-fader');

Route::get('/video', [VideoController::class, 'index'])->name('video');

Route::get('/photogrid', [PhotoGridController::class, 'index'])->name('photogrid');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Lengkap / Completed no need to Repair