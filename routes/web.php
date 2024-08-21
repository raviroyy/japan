<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RecentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManageuserController;
//use App\Http\Controllers\BootController;



Route::get('/', [MainPageController::class,'index'])->name('hero');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register_req',[AuthController::class,'register'])->name('register_req');


Route::get('home',[HomeController::class,'home'])->name('admin.home');
Route::get('home/admin',[AdminController::class,'index'])->name('user.home');

Route::get('about',[AboutController::class,'index'])->name('about');

Route::get('team',[TeamController::class,'index'])->name('team');

Route::get('recent',[RecentController::class,'index'])->name('recent');

Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::get('profile',[ProfileController::class,'index'])->name('user.profile');
Route::post('profile',[ProfileController::class,'profile'])->name('user.profile.update');
Route::delete('profile/{id}',[ProfileController::class,'delete'])->name('user.profile.delete');
// In routes/web.php
Route::get('/profile/{id}', [ProfileController::class, 'show']);


Route::get('document',[DocumentController::class,'index'])->name('user.document');
Route::post('document/upload', [DocumentController::class, 'upload'])->name('user.document.upload');
Route::delete('document/delete/{id}', [DocumentController::class, 'delete'])->name('user.document.delete');



//Route::get('ManageUser', [ManageuserController::class, 'index'])->name('admin.Manageuser');

//task bootstrap controller
//Route::get('/', [BootController::class, 'index']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('user.home', function () {
        return view('user.home');
    })->name('user.home');
});
