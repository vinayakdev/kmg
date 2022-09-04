<?php

use Illuminate\Support\Facades\Route;

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

Route::view("/", "welcome");


Route::view("/test", "test");
Route::post("/upload", [App\Http\Controllers\Upload::class, "store"]);

Route::middleware([
    "auth:sanctum",
    config("jetstream.auth_session"),
    "verified",
])->group(function () {
    Route::get("/home", [\App\Http\Controllers\UserController::class, "home",])->name("home");
    Route::get("/search", [\App\Http\Controllers\UserController::class, "search",])->name("search");
    Route::get("/profile", [\App\Http\Controllers\UserController::class, "profile",])->name("profile");
    
    Route::get("/user/{id}", [\App\Http\Controllers\UserController::class, "userprofile",])->name("userprofile");
    // personal

    Route::get("/personal", [\App\Http\Controllers\ProfilesController::class, "create",])->name("personal.create");
    Route::post("/personal", [\App\Http\Controllers\ProfilesController::class, "store",])->name("personal.post");
    // about

    Route::get("/about", [\App\Http\Controllers\ProfilesController::class, "aboutcreate",])->name("about.create");
    Route::post("/about", [\App\Http\Controllers\ProfilesController::class, "aboutstore",])->name("about.post");
    // fileupoad

    Route::get("/filepupload", [\App\Http\Controllers\ProfilesController::class, "filepuploadcreate",])->name("filepupload.create");
    Route::post("/filepupload", [\App\Http\Controllers\ProfilesController::class, "filepuploadstore",])->name("filepupload.post");
});
