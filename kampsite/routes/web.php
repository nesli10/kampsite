<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\kampController;
use App\Http\Controllers\userController;

//admin routes
Route::get('admin/{id}', [adminController::class, 'getCamp'])->name('admin');
Route::post('adminlogin', [adminController::class, 'login']);
Route::view('kampguncelle', 'kampguncelle');
Route::view('kampekle', 'kampekle');
Route::post('addcamp', [adminController::class, 'addcamp']);
Route::get('kampguncelle/{kampid?}', [adminController::class, 'getupdate'])->name('guncelle');
Route::get('/kampSil/{kampid?}', [adminController::class, 'kampSil'])->name('kampSil');
Route::post('/setUpdate', [adminController::class, 'setUpdate'])->name('post.kampguncelle');
Route::view('adminlogin', 'adminlogin');
//user routes
Route::view('', 'home');
Route::get('/ege', [kampController::class, 'egelistele'])->name('egelist');
Route::get('/akdeniz', [kampController::class, 'akdenizlistele'])->name('akdenizlist');
Route::get('/marmara', [kampController::class, 'marmaralistele'])->name('marmaralist');
Route::get('/icanadolu', [kampController::class, 'icanadolulistele'])->name('icanadolulist');
Route::get('/doguanadolu', [kampController::class, 'doguanadolulistele'])->name('doguanadolulist');
Route::get('/karadeniz', [kampController::class, 'karadenizlistele'])->name('karadenizlist');
Route::view('giris', 'giris');
Route::post('userLogin', [userController::class, 'login']);
Route::get('/logout', [userController::class, 'logout']);
Route::get('/kullanicibilgi/{id}', [userController::class, 'getUser']);
Route::view('kayit', 'kayit');
Route::post('userSave', [userController::class, 'userSave']);
Route::post('addpuan', [kampController::class, 'addpuan']);
Route::view('iletisim', 'iletisim');




