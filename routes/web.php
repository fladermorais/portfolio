<?php

// Authentication Routes...

use App\Http\Controllers\Admin\GaleriaController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::get('/', 'SiteController@index')->name('home');
Route::get('/construcao', 'SiteController@index')->name('construcao');
Route::get('/sobre', 'SiteController@sobre')->name('sobre');

Route::get('/noticias', 'SiteController@noticias')->name('noticias');
Route::post('/noticias', 'SiteController@noticias')->name('noticiasSearch');
Route::get('/categorias/{alias}', 'SiteController@categorias')->name('categorias');
Route::get('/noticia/{alias}', 'SiteController@noticia')->name('noticia');

Route::get('/contato', 'SiteController@contato')->name('contato');
Route::post('/contato', 'Admin\ContatoController@store')->name('contatoForm');
Route::delete('/contato/{mensagem}', 'Admin\ContatoController@destroy')->name('contato.delete');

Route::get('galeria', [SiteController::class, 'galeria'])->name('galeria');

Route::get('/admin', 'HomeController@logado')->name('logado');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    
    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/', 'UserController@index')->name('usuarios.index');
        Route::get('/novo', 'UserController@create')->name('usuarios.create');
        Route::post('/store', 'UserController@store')->name('usuarios.store');
        Route::get('/edit/{id}', 'UserController@edit')->name('usuarios.edit');
        Route::post('/update/{id}', 'UserController@update')->name('usuarios.update');
        Route::get('/delete/{id}', 'UserController@delete')->name('usuarios.delete');
        Route::get('/active/{id}', 'UserController@active')->name('usuarios.active');
        
        Route::get('/role/{user}', 'UserController@role')->name('userRole.index');
        Route::post('/role/{user}', 'UserController@roleStore')->name('userRole.store');
        Route::delete('/role/{user}/{role}', 'UserController@roleDelete')->name('userRole.delete');
        
    });
    
    Route::group(['prefix' => 'roles'], function() {
        Route::get('/', 'RoleController@index')->name('roles.index');
        Route::get('/create', 'RoleController@create')->name('roles.create');
        Route::post('/store', 'RoleController@store')->name('roles.store');
        Route::get('/edit/{id}', 'RoleController@edit')->name('roles.edit');
        Route::put('/update/{id}', 'RoleController@update')->name('roles.update');
        
        Route::get('/permission/{role}', 'RoleController@permission')->name('rolePermission.index');
        Route::post('/permission/{role}', 'RoleController@permissionStore')->name('rolePermission.store');
        Route::delete('/permission/{role}/{permission}', 'RoleController@permissionDelete')->name('rolePermission.delete');
    });
    
    Route::group(['prefix' => 'permissions'], function() {
        Route::get('/', 'PermissionController@index')->name('permissions.index');
        Route::get('/create', 'PermissionController@create')->name('permissions.create');
        Route::post('/store', 'PermissionController@store')->name('permissions.store');
        Route::get('/edit/{id}', 'PermissionController@edit')->name('permissions.edit');
        Route::put('/update/{id}', 'PermissionController@update')->name('permissions.update');
    });
    
    Route::group(['prefix' => 'configs'], function() {
        Route::get('/', 'ConfigController@index')->name('configs.index');
        Route::get('/create', 'ConfigController@create')->name('configs.create');
        Route::post('/store', 'ConfigController@store')->name('configs.store');
        Route::get('/edit/{id}', 'ConfigController@edit')->name('configs.edit');
        Route::put('/update/{id}', 'ConfigController@update')->name('configs.update');
    });
    
    Route::group(['prefix' => 'categorias'], function() {
        Route::get('/', 'CategoriaController@index')->name('categorias.index');
        Route::get('/create', 'CategoriaController@create')->name('categorias.create');
        Route::post('/store', 'CategoriaController@store')->name('categorias.store');
        Route::get('/edit/{id}', 'CategoriaController@edit')->name('categorias.edit');
        Route::put('/update/{id}', 'CategoriaController@update')->name('categorias.update');
        Route::delete('/delete/{id}', 'CategoriaController@delete')->name('categorias.delete');
    });
    
    Route::group(['prefix' => 'noticias'], function() {
        Route::get('/', 'NoticiaController@index')->name('noticias.index');
        Route::get('/create', 'NoticiaController@create')->name('noticias.create');
        Route::post('/store', 'NoticiaController@store')->name('noticias.store');
        Route::get('/edit/{id}', 'NoticiaController@edit')->name('noticias.edit');
        Route::put('/update/{id}', 'NoticiaController@update')->name('noticias.update');
        Route::get('/delete/{id}', 'NoticiaController@delete')->name('noticias.delete');
    });

    Route::resource('galeria', GaleriaController::class);

    Route::group(['prefix' => 'redes'], function() {
        Route::get('/', 'RedesController@index')->name('redes.index');
        Route::get('/create', 'RedesController@create')->name('redes.create');
        Route::post('/store', 'RedesController@store')->name('redes.store');
        Route::get('/edit/{id}', 'RedesController@edit')->name('redes.edit');
        Route::put('/update/{id}', 'RedesController@update')->name('redes.update');
        Route::delete('/delete/{id}', 'RedesController@delete')->name('redes.delete');
    });

    Route::group(['prefix' => 'quemsomos'], function() {
        Route::get('/', 'QuemSomosController@index')->name('quemsomos.index');
        Route::get('/create', 'QuemSomosController@create')->name('quemsomos.create');
        Route::post('/store', 'QuemSomosController@store')->name('quemsomos.store');
        Route::get('/edit/{id}', 'QuemSomosController@edit')->name('quemsomos.edit');
        Route::put('/update/{id}', 'QuemSomosController@update')->name('quemsomos.update');
        Route::delete('/delete/{id}', 'QuemSomosController@delete')->name('quemsomos.delete');
    });

    Route::get('/mensagens', 'ContatoController@index')->name('mensagens');

    Route::resource('menus', MenuController::class);
});