<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SitesettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Admin\Auth\LoginController;

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
Route::group(['prefix' => 'admin',
        'as' => 'admin.'],function(){
    
            Route::group(['middleware'=> 'admin_logged'],function(){
                Route::get('/login',[LoginController::class, 'index']);
                Route::post('login',[LoginController::class, 'store'])->name('auth.login');
            });
            // logout
            Route::get('logout',[LoginController::class,'destroy'])->name('logout');
 
            Route::group(['middleware'=> 'admin_auth'],function(){
                Route::get('/dashboard',[SitesettingController::class, 'index'])->name('dashboard');
                //update sitesettings
                Route::post('/sitesetting/update/{id}',[SitesettingController::class, 'update'])->name('sitesetting.update');

                // update profile
                Route::post('/personalinfo/update/{id}',[ProfileController::class, 'update'])->name('profile.update');

                // skill 
                Route::get('/skills',[SkillController::class, 'index'])->name('skill');
                Route::post('/add/skill',[SkillController::class, 'store'])->name('skill.store');
                Route::post('/delete/skill/{id}',[SkillController::class, 'delete'])->name('skill.delete');

                // service 
                Route::get('/services',[ServiceController::class, 'index'])->name('service');
                Route::post('/add/service',[ServiceController::class, 'store'])->name('service.store');
                Route::Post('/delete/service/{id}',[ServiceController::class, 'delete'])->name('service.delete');

                // sociallinks
                Route::get('/sociallinks',[SocaillinkController::class, 'index'])->name('link');
                Route::post('/sociallink/add',[SociallinkController::class,'store'])->name('link.store');
                Route::post('/delete/sociallink/{id}',[SociallinkController::class,'delete'])->name('link.delete');

                // mail 
                Route::get('/mails',[MailController::class,'index'])->name('mail');
                Route::post('delete/mail/{id}',[MailController::class,'delete'])->name('mail.delete');
        });

           
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/contact',[Mailcontroller::class,'send'])->name('mail.send');

