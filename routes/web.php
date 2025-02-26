<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;



Route::get('/', "HomeController@index")->name('home');

Route::get('/about', "HomeController@about")->name('about');

Route::get('/contact', "ContactController@showForm")->name('contact');

Route::post('/contact', "ContactController@contact");

Route::get("/service", "HomeController@service")->name('service');

Route::post('/user/{id}/{name?}', "ContactController@user")
    ->name('user')
    ->where(["id" => "[0-9]+", "name" => "[a-zA-Z]+"]);


Route::match(['get', 'post'], "/support-form", "SupportFormController@support")->name('support-form.support');

Route::patch("/users/{id}/update", "UserController@update")->name('users.update');

Route::put("/users/{id}/update-all", "UserController@updateAll")->name('users.updateAll');

Route::delete("/user/{id}/delete", "UserController@delete")->name('user.delete');


Route::any('all', function () {
    dd("All methods are allowed");
});

Route::resource("article", "ArticleController");

Route::resource("/api/article", "Api/ArticleController");

Route::get('/users/{id}', "UserController@show")
    ->name('users.show')
    ->whereNumber("id");


Route::get('/users/{name}', "UserController@showName")
    ->name('users.showName')
    ->whereAlpha("name");



Route::get('/user/{role}', "UserController@roleCheck")
    ->name('user.roleCheck')
    ->whereIn("role", ['admin', 'user']);


Route::prefix("admin")->group(function(){
   Route::get('/edit-article', "ArticleController@edit")->name("admin.articleEdit");
   Route::get('/article/{id}/delete', "ArticleController@destroy")->name("admin.articleDestroy");
});


Route::controller("UserController")->group(function(){
    Route::get("/get-user", "getUser");
    Route::get("/delete-user", "deleteUser");
});
