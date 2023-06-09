<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\RoleController;
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

Route::middleware(['auth'])->controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard','index')->name('admin.dashboard');

});

Route::middleware(['auth'])->controller(PostController::class)->group(function () {
    Route::get('/admin/posts','index')->name('post.index');
    Route::get('/admin/posts/create','create')->name('post.create');
    Route::get('/admin/posts/{id}/show','show')->name('post.show');
    Route::post('/admin/posts/store','store')->name('post.store');
    Route::get('/admin/posts/{id}/edit','edit')->name('post.edit');
    Route::put('/admin/posts/{id}/update','update')->name('post.update');
    Route::delete('/admin/posts/{post}/delete','destroy')->name('post.delete');


});
Route::middleware(['auth'])->controller(UserController::class)->group(function () {
    Route::get('/admin/users','index')->name('user.index');
    Route::get('/admin/users/create','create')->name('user.create');
    Route::get('/admin/users/{id}/show','show')->name('user.show');
    Route::post('/admin/users/store','store')->name('user.store');
    Route::get('/admin/users/{user}/edit','edit')->name('user.edit');
    Route::put('/admin/users/{user}/update','update')->name('user.update');
    Route::post('/admin/users/{user}/delete','destroy')->name('user.delete');
});
Route::middleware('auth')->controller(RoleController::class)->group(function () {
    Route::get('/admin/roles','index')->name('role.index');
    Route::get('/admin/roles/create','create')->name('role.create');
    Route::get('/admin/roles/{id}/show','show')->name('role.show');
    Route::post('/admin/roles/store','store')->name('role.store');
    Route::get('/admin/roles/{id}/edit','edit')->name('role.edit');
    Route::put('/admin/roles/{role}/update','update')->name('role.update');
    Route::delete('/admin/roles/{role}/delete','destroy')->name('role.delete');

    Route::get('admin/roles/{id}/attach-modify','modify_attach')->name('role.modify.attach');
    Route::get('admin/roles/{id}/detach-modify','modify_detach')->name('role.modify.detach');

    Route::post('admin/roles/{id}/attach','attach')->name('role.attach');
    Route::post('admin/roles/{id}/detach','detach')->name('role.detach');
});
Route::middleware('auth')->controller(PermissionController::class)->group(function () {
    Route::get('/admin/permissions','index')->name('permission.index');
    Route::get('/admin/permissions/create','create')->name('permission.create');
    Route::get('/admin/permissions/{id}/show','show')->name('permission.show');
    Route::post('/admin/permissions/store','store')->name('permission.store');
    Route::get('/admin/permissions/{id}/edit','edit')->name('permission.edit');
    Route::put('/admin/permissions/{permission}/update','update')->name('permission.update');
    Route::delete('/admin/permissions/{permission}/delete','destroy')->name('permission.delete');
});
