<?php

use Illuminate\Support\Facades\Route;

Route::get('/first-package', [Saidul44\FirstPackage\Http\Controllers\FirstPackageController::class, 'index']);