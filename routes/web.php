<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\FunController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Middleware\IsLoggedIn;
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

// Admin Part All Section
// ====================================================================================
Route::get('/register', [LoginController::class, 'register']);
Route::get('/forgot-pass', [LoginController::class, 'forgotPass']);
Route::get('/reset-pass/{email}/{token}', [LoginController::class, 'resetPass'])->name('reset');
Route::get('/login', [LoginController::class, 'login']);

Route::post('/register', [LoginController::class, 'registerUser'])->name('admin.auth.register');
Route::post('/login', [LoginController::class, 'loginUser'])->name('admin.auth.login');
Route::post('/forgot-pass', [LoginController::class, 'forgotPassword'])->name('admin.auth.forgot');
Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('admin.auth.reset');

Route::group(['middleware' => ['IsLoggedIn']], function() {
    // login part --------------------
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');


    // Admin Part  ----------------------------
    Route::get('/admin', [LoginController::class, 'index'])->name('admin');
    // Dashboard Part --------------------------------
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');



    // Profile Part -------------------------------------------------------
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/add', [ProfileController::class, 'add'])->name('profile.add');
    Route::post('profile/store', [ProfileController::class, 'Store'])->name('profile.store');
    Route::get('profile/edit/{id}', [ProfileController::class, 'Edit'])->name('profile.edit');
    Route::post('profile/update/{id}', [ProfileController::class, 'Update'])->name('profile.update');
    Route::get('profile/delete/{id}', [ProfileController::class, 'Delete'])->name('profile.delete');
    Route::get('/upload-file', [ProfileController::class, 'createForm']);
    Route::post('/upload-file', [ProfileController::class, 'fileUpload'])->name('fileUpload');



    // About Part -------------------------------------------------------
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('about/add', [AboutController::class, 'add'])->name('about.add');
    Route::post('about/store', [AboutController::class, 'Store'])->name('about.store');
    Route::get('about/edit/{id}', [AboutController::class, 'Edit'])->name('about.edit');
    Route::post('about/update/{id}', [AboutController::class, 'Update'])->name('about.update');
    Route::get('about/delete/{id}', [AboutController::class, 'Delete'])->name('about.delete');


    // About Part -------------------------------------------------------
    Route::get('testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::get('testimonial/add', [TestimonialController::class, 'add'])->name('testimonial.add');
    Route::post('testimonial/store', [TestimonialController::class, 'Store'])->name('testimonial.store');
    Route::get('testimonial/edit/{id}', [TestimonialController::class, 'Edit'])->name('testimonial.edit');
    Route::post('testimonial/update/{id}', [TestimonialController::class, 'Update'])->name('testimonial.update');
    Route::get('testimonial/delete/{id}', [TestimonialController::class, 'Delete'])->name('testimonial.delete');


    // About Part -------------------------------------------------------
    Route::get('service', [ServiceController::class, 'index'])->name('service');
    Route::get('service/add', [ServiceController::class, 'add'])->name('service.add');
    Route::post('service/store', [ServiceController::class, 'Store'])->name('service.store');
    Route::get('service/edit/{id}', [ServiceController::class, 'Edit'])->name('service.edit');
    Route::post('service/update/{id}', [ServiceController::class, 'Update'])->name('service.update');
    Route::get('service/delete/{id}', [ServiceController::class, 'Delete'])->name('service.delete');


    // Client Part -------------------------------------------------------
    Route::get('client', [ClientController::class, 'index'])->name('client');
    Route::get('client/add', [ClientController::class, 'add'])->name('client.add');
    Route::post('client/store', [ClientController::class, 'Store'])->name('client.store');
    Route::get('client/edit/{id}', [ClientController::class, 'Edit'])->name('client.edit');
    Route::post('client/update/{id}', [ClientController::class, 'Update'])->name('client.update');
    Route::get('client/delete/{id}', [ClientController::class, 'Delete'])->name('client.delete');


    // Client Part -------------------------------------------------------
    Route::get('fun', [FunController::class, 'index'])->name('fun');
    Route::get('fun/add', [FunController::class, 'add'])->name('fun.add');
    Route::post('fun/store', [FunController::class, 'Store'])->name('fun.store');
    Route::get('fun/edit/{id}', [FunController::class, 'Edit'])->name('fun.edit');
    Route::post('fun/update/{id}', [FunController::class, 'Update'])->name('fun.update');
    Route::get('fun/delete/{id}', [FunController::class, 'Delete'])->name('fun.delete');


    // Client Part -------------------------------------------------------
    Route::get('resume', [ResumeController::class, 'index'])->name('resume');
    Route::get('resume/add', [ResumeController::class, 'add'])->name('resume.add');
    Route::post('resume/store', [ResumeController::class, 'Store'])->name('resume.store');
    Route::get('resume/edit/{id}', [ResumeController::class, 'Edit'])->name('resume.edit');
    Route::post('resume/update/{id}', [ResumeController::class, 'Update'])->name('resume.update');
    Route::get('resume/delete/{id}', [ResumeController::class, 'Delete'])->name('resume.delete');


    // Client Part -------------------------------------------------------
    Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('portfolio/add', [PortfolioController::class, 'add'])->name('portfolio.add');
    Route::post('portfolio/store', [PortfolioController::class, 'Store'])->name('portfolio.store');
    Route::get('portfolio/edit/{id}', [PortfolioController::class, 'Edit'])->name('portfolio.edit');
    Route::post('portfolio/update/{id}', [PortfolioController::class, 'Update'])->name('portfolio.update');
    Route::get('portfolio/delete/{id}', [PortfolioController::class, 'Delete'])->name('portfolio.delete');


    // Client Part -------------------------------------------------------
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('category/store', [CategoryController::class, 'Store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'Edit'])->name('category.edit');
    Route::post('category/update/{id}', [CategoryController::class, 'Update'])->name('category.update');
    Route::get('category/delete/{id}', [CategoryController::class, 'Delete'])->name('category.delete');




});

Route::get('/', [IndexController::class, 'index'])->name('frontend.index');
Route::get('/portfolio_page', [IndexController::class, 'Portfolio'])->name('frontend.portfolio');
Route::get('/blog_post', [IndexController::class, 'blog'])->name('frontend.blog_post');



    // Contact Part -------------------------------------------------------

    Route::post('contact/store', [ContactController::class, 'Store'])->name('contact.store');

