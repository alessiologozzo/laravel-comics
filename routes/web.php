<?php

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

Route::get('/', function () {
    return view('home', ["links" => config("data.links"), "comics" => config("data.comics"), "categories" => config("data.categories"), "dcComics" => config("data.dcComics"), "shops" => config("data.shops"), "dcs" => config("data.dcs"), "sites" => config("data.sites")]);
})->name("home");

Route::get("/comics/{index}", function ($index) {
    $comics = config("data.comics");
    $comic = $comics[$index];
    return view("show", ["comic" => $comic, "links" => config("data.links"), "categories" => config("data.categories"), "dcComics" => config("data.dcComics"), "shops" => config("data.shops"), "dcs" => config("data.dcs"), "sites" => config("data.sites")]);
})->name("show");