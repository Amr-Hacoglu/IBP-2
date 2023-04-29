<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\MessagesController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::controller(DemoController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');
    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('contact.page');
});


// Home Slide All Route
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');


});

//Admin All Route
Route::controller(AdminController::class)->group(function (){
    Route::get('/about/logout','destroy')->name('admin.logout');
});

// About Page All Route
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about');
    Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');// اهم نقطة هون انو الشخص الي مو داخل بالايميل مابصير يدخل للشاشة الرئيسية بيتوجه لشاشة تسجيل الدخول

//Profile
Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function (){
        Route::get('/about/logout','destroy')->name('admin.logout');
        Route::get('/about/profile','Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Portfolio All Route
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/all/CertAndCour', 'AllPortfolio')->name('all.portfolio');
    Route::get('/add/CertAndCour', 'AddPortfolio')->name('add.portfolio');
    Route::post('/store/CertAndCour', 'StorePortfolio')->name('store.portfolio');
    Route::get('/edit/CertAndCour/{id}', 'EditPortfolio')->name('edit.portfolio');
    Route::post('/update/CertAndCour', 'UpdatePortfolio')->name('update.portfolio');
    Route::get('/delete/CertAndCour/{id}', 'DeletePortfolio')->name('delete.portfolio');
    Route::get('/CertAndCour/details/{id}', 'PortfolioDetails')->name('portfolio.details');
    Route::get('/CertAndCour', 'HomePortfolio')->name('home.portfolio');
});

// Blog Category All Routes
Route::controller(BlogCategoryController::class)->group(function () {
    Route::get('/all/Work/category', 'AllBlogCategory')->name('all.blog.category');
    Route::get('/add/Work/category', 'AddBlogCategory')->name('add.blog.category');
    Route::post('/store/Work/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::get('/edit/Work/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
    Route::post('/update/Work/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/Work/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');

});

// Blog All Route
Route::controller(BlogController::class)->group(function () {
    Route::get('/all/Work', 'AllBlog')->name('all.blog');
    Route::get('/add/Work', 'AddBlog')->name('add.blog');
    Route::post('/store/Work', 'StoreBlog')->name('store.blog');
    Route::get('/edit/Work/{id}', 'EditBlog')->name('edit.blog');
    Route::post('/update/Work', 'UpdateBlog')->name('update.blog');
    Route::get('/delete/Work/{id}', 'DeleteBlog')->name('delete.blog');
    Route::get('/Work/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/Work/{id}', 'CategoryBlog')->name('category.blog');
    Route::get('/Work', 'HomeBlog')->name('home.blog');
});

// Footer All Route
Route::controller(FooterController::class)->group(function () {
    Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
    Route::post('/update/footer', 'UpdateFooter')->name('update.footer');

});


// Contact All Route
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'Contact')->name('contact.me');
    Route::post('/store/message', 'StoreMessage')->name('store.message');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message');
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
});

// Announcements All Route
Route::prefix('announcements')->group(function () {
    Route::get('/', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::get('/view', [AnnouncementController::class, 'view'])->name('announcements.view');
    Route::post('/', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/{announcement}', [AnnouncementController::class, 'show'])->name('announcements.show');
    Route::get('/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('/{announcement}', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');
});

Route::get('/messages', [MessagesController::class, 'index'])->name('messages.index');
Route::get('/messages/create', [MessagesController::class, 'create'])->name('messages.create');
Route::post('/messages', [MessagesController::class, 'store'])->name('messages.store');
Route::get('/messages/{message}', [MessagesController::class, 'show'])->name('messages.show');
Route::post('/messages/{message}/reply', [MessagesController::class, 'reply'])->name('messages.reply');
Route::post('/messages/{message}/sendReply', [MessagesController::class, 'sendReply'])->name('messages.sendReply');


require __DIR__.'/auth.php';
