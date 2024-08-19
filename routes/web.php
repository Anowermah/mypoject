<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', 'Frontend\HomeController@index')->name('home');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us','Frontend\HomeController@contactUs')->name('contactUs');
Route::get('/news-gallery','Frontend\HomeController@newsGallery')->name('newsGallery');
Route::get('/archives','Frontend\HomeController@archives')->name('archives');
Route::get('/post-details/{id}','Frontend\HomeController@postDetails')->name('postDetails');
Route::get('/post/{category_id}/{slug}','Frontend\HomeController@categoryPost')->name('categoryPost');



Route::group(['prefix'=>'/admin','middleware' => ['auth','verified','acl']], function (){

    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    //Route::get('/', 'App\Http\Controllers\HomeController@index')->name('dashboard');
    //Route::get('/', [App\Http\Controllers\HomeController::class, 'index2'])->name('dashboard');

    // ACL Code start
    Route::group(['prefix'=>'/role'],function (){
        Route::get('/','Backend\RolePermissionController@roleList')->name('role.index');
        Route::post('/add','Backend\RolePermissionController@roleStore')->name('role.store');
        Route::get('/edit/{id}','Backend\RolePermissionController@roleEdit')->name('role.edit');
        Route::post('/update','Backend\RolePermissionController@roleUpdate')->name('role.update');
        Route::get('/delete/{id}','Backend\RolePermissionController@roleDestroy')->name('role.delete');
    });

    Route::group(['prefix'=>'/module'],function (){
        Route::get('/','Backend\RolePermissionController@moduleList')->name('module.index');
        Route::post('/add','Backend\RolePermissionController@moduleStore')->name('module.store');
        Route::get('/edit/{id}','Backend\RolePermissionController@moduleEdit')->name('module.edit');
        Route::post('/update','Backend\RolePermissionController@moduleUpdate')->name('module.update');
        Route::get('/delete/{id}','Backend\RolePermissionController@moduleDestroy')->name('module.delete');

        Route::get('/operation-list/{id}','Backend\RolePermissionController@moduleOperationList')->name('module.operationList');
        Route::post('/operation-add/{module_id}','Backend\RolePermissionController@moduleOperationAdd')->name('module.operationAdd');
        Route::get('/operation-edit/{id}','Backend\RolePermissionController@moduleOperationEdit')->name('module.operationEdit');
        Route::post('/operation-update/{module_id}','Backend\RolePermissionController@moduleOperationUpdate')->name('module.operationUpdate');
        Route::get('/operation-delete/{module_id}/{id}','Backend\RolePermissionController@moduleOperationDelete')->name('module.operationDelete');
    });

    Route::group(['prefix'=>'/permission'],function (){
        Route::get('/','Backend\RolePermissionController@permissionIndex')->name('permission.index');
        Route::get('/create/{role_id}','Backend\RolePermissionController@permissionCreate')->name('permission.create');
        Route::post('/store','Backend\RolePermissionController@permissionStore')->name('permission.store');
    });

    Route::group(['prefix'=>'/user'],function (){
        Route::get('/','Backend\UserController@userList')->name('user.index');
        Route::post('/add','Backend\UserController@userStore')->name('user.store');
        Route::get('/edit/{id}','Backend\UserController@userEdit')->name('user.edit');
        Route::post('/update','Backend\UserController@userUpdate')->name('user.update');
        Route::get('/delete/{id}','Backend\UserController@userDestroy')->name('user.delete');
    });

    Route::group(['prefix'=>'/setting'],function (){
        Route::get('/','Backend\SettingController@index')->name('setting.index');
        Route::post('/add','Backend\SettingController@settingStore')->name('setting.store');
        Route::get('/edit/{id}','Backend\SettingController@settingEdit')->name('setting.edit');
        Route::post('/update','Backend\SettingController@settingUpdate')->name('setting.update');
        Route::get('/delete/{id}','Backend\SettingController@settingDestroy')->name('setting.delete');
    });
    // ACL Code end

    Route::group(['prefix'=>'/category'],function(){
        Route::get('/', 'Backend\CategoryController@index')->name('category.index');
        Route::post('/add', 'Backend\CategoryController@store')->name('category.store');
        // Route::get('/edit/{id}','Backend\CategoryController@edit')->name('category.edit');
        // Route::post('/update/{id}','Backend\CategoryController@update')->name('category.update');
        // Route::get('/delete/{id}','Backend\CategoryController@destroy')->name('category.destroy');
    });

    Route::group(['prefix'=>'/post'],function(){
        Route::get('/', 'Backend\PostController@index')->name('post.index');
        Route::get('/create', 'Backend\PostController@create')->name('post.create');
        Route::post('/add', 'Backend\PostController@store')->name('post.store');
        Route::get('/edit/{id}','Backend\PostController@edit')->name('post.edit');
        Route::post('/update/{id}','Backend\PostController@update')->name('post.update');
        // Route::get('/delete/{id}','Backend\CategoryController@destroy')->name('category.destroy');
    });


});
