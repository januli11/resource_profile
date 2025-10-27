<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/basic', function () {
    return view('BasicInformationPage');
})->name('basic');

Route::get('/env', function () {
    return view('EnvironmentalInformation');
})->name('env');

Route::get('/edu', function () {
    return view('EducationPage');
})->name('edu');

Route::get('/reg', function () {
    return view('ReligionInformation');
})->name('reg');


require __DIR__ . '/auth.php';
Route::get('/pop', function () {
    return view('populationInformation');
})->name('pop');

Route::get('/hou', function () {
    return view('houseInformation');
})->name('hou');

Route::get('/hea', function () {
    return view('healthInformation');
})->name('hea');

Route::get('/infras', function () {
    return view('InfrastructurePage');
})->name('infras');

Route::get('/eco', function () {
    return view('EconomicActivity');
})->name('eco');

require __DIR__.'/auth.php';
