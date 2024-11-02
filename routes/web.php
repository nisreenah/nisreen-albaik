<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/show-blog/{blog}', [HomeController::class, 'blog'])->name('show-blog');
Route::get('/show-portfolio/{portfolio}', [HomeController::class, 'portfolio'])->name('show-portfolio');

Route::post('/leave-a-comment', [HomeController::class, 'leaveComment'])->name('leave-comment');
Route::post('/get-in-touch', [HomeController::class, 'getInTouch'])->name('get-in-touch');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {

        Route::get('/show-info', [ProfileController::class, 'showInfo'])->name('profile.show-info');
        Route::put('/show-info/{profile}', [ProfileController::class, 'updateInfo'])->name('profile.update-info');
        Route::resource('comments', CommentsController::class);
        Route::put('/comments/{comment}/activate', [CommentsController::class, 'activate'])->name('comments.activate');
        Route::put('/comments/{comment}/deactivate', [CommentsController::class, 'deactivate'])->name('comments.deactivate');
        Route::resource('blogs', BlogsController::class);
        Route::resource('skills', SkillsController::class);
        Route::resource('experiences', ExperiencesController::class);
        Route::resource('educations', EducationsController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('testimonials', TestimonialsController::class);
        Route::resource('contact-us', ContactUsController::class);
        Route::resource('categories', CategoriesController::class);
        Route::resource('portfolio', PortfolioController::class);
        Route::resource('gallery', GalleriesController::class);
    });
});

require __DIR__.'/auth.php';
