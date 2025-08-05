<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\ImpactAchievementsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\contactInfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


 Route::prefix("skills")->name('skills.')->group(function () {
    Route::get('/index', [SkillsController::class, 'index'])->name('index');
    Route::post('/update', [SkillsController::class, 'update'])->name('update');
    Route::post('/store', [SkillsController::class, 'store'])->name('store');
    Route::delete('/destroy/{id}', [SkillsController::class, 'destroy'])->name('destroy');
    Route::post('/sort', [SkillsController::class, 'sort'])->name('sort');
});

    Route::prefix("projects")->name('project.')->group(function () {
    Route::get('/index', [projectsController::class, 'index'])->name('index');
    Route::post('/store', [projectsController::class, 'store'])->name('store');
    Route::get('/edit', [projectsController::class, 'edit'])->name('edit');
    Route::patch('/update', [projectsController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [projectsController::class, 'destroy'])->name('destroy');
    Route::post('/sort', [projectsController::class, 'sort'])->name('sort');

});

Route::prefix("contactInfo")->name('contactInfo.')->group(function () {
    Route::get('/index', [contactInfoController::class, 'index'])->name('index');
    Route::post('/store', [contactInfoController::class, 'store'])->name('store');
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    
  


    Route::prefix("impactAchievements")->group(function () {
    Route::get('/index', [ImpactAchievementsController::class, 'index'])->name('impactAchievements');
    Route::get('/edit', [ImpactAchievementsController::class, 'edit'])->name('impactAchievements.edit');
    Route::post('/update', [ImpactAchievementsController::class, 'update'])->name('impactAchievements.update');
    Route::delete('/destroy', [ImpactAchievementsController::class, 'destroy'])->name('impactAchievements.destroy');
    });
   

require __DIR__.'/auth.php';
