<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\OceneController::class, "index"]);

Route::view("/dodaj-ocenu", "addGrade");

Route::post("/add-grade", [\App\Http\Controllers\OceneController::class, "dodajOcenu"]);

Route::get("/admin/all-products", [\App\Http\Controllers\ProductsController::class, "index"]);

Route::get("/admin/delete-product/{products}", [\App\Http\Controllers\ProductsController::class, "delete"])
    ->name("deleteProduct");

Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, "allContacts"]);

Route::get("/admin/delete-contact/{contacts}", [\App\Http\Controllers\ContactController::class, "delete"])->name("deleteContact");
