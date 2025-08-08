<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\ImpactAchievementsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\contactInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarFeatureController;
use App\Http\Controllers\LuggageGuidelineController;
use App\Http\Controllers\LuggageOptionController;

use Illuminate\Support\Facades\Route;


    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/heathrowairport', [HomeController::class, 'heathrowairport'])->name('heathrowairport');
    Route::get('/gatwickairport', [HomeController::class, 'gatwickairport'])->name('gatwickairport');
    Route::get('/stanstedairport', [HomeController::class, 'stanstedairport'])->name('stanstedairport');
    Route::get('/lutonairport', [HomeController::class, 'lutonairport'])->name('lutonairport');
    Route::get('/londoncityairport', [HomeController::class, 'lutonairport'])->name('londoncityairport');

     Route::get('/southhamptoncruiseport', [HomeController::class, 'southhamptoncruiseport'])->name('southhamptoncruiseport');
      Route::get('/portsmouthcruiseport', [HomeController::class, 'portsmouthcruiseport'])->name('portsmouthcruiseport');
       Route::get('/harwirchcruiseport', [HomeController::class, 'harwirchcruiseport'])->name('harwirchcruiseport');
        Route::get('/dovercruiseport', [HomeController::class, 'dovercruiseport'])->name('dovercruiseport');
         Route::get('/tilburydocs', [HomeController::class, 'tilburydocs'])->name('tilburydocs');


         Route::get('/cityairporttowestminster', [HomeController::class, 'cityairporttowestminster'])->name('cityairporttowestminster');
         Route::get('/GatwicktoCanaryWharf', [HomeController::class, 'GatwicktoCanaryWharf'])->name('GatwicktoCanaryWharf');
         Route::get('/HeathrowtoChelsea', [HomeController::class, 'HeathrowtoChelsea'])->name('HeathrowtoChelsea');
         Route::get('/LutontoSouthKensington', [HomeController::class, 'LutontoSouthKensington'])->name('LutontoSouthKensington');
         Route::get('/StanstedtoKingcross', [HomeController::class, 'StanstedtoKingcross'])->name('StanstedtoKingcross');


         Route::get('/LondontoOxford', [HomeController::class, 'LondontoOxford'])->name('LondontoOxford');
         Route::get('/LondontoManchester', [HomeController::class, 'LondontoManchester'])->name('LondontoManchester');
         Route::get('/LondontoCambridge', [HomeController::class, 'LondontoCambridge'])->name('LondontoCambridge');
         Route::get('/LondontoBrimingham', [HomeController::class, 'LondontoBrimingham'])->name('LondontoBrimingham');
         Route::get('/LondontoBath', [HomeController::class, 'LondontoBath'])->name('LondontoBath');


          Route::get('/FAQs', [HomeController::class, 'FAQs'])->name('FAQs');
         Route::get('/TermsAndConditions', [HomeController::class, 'TermsAndConditions'])->name('TermsAndConditions');
          Route::get('/PrivacyPolicy', [HomeController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');
         Route::get('/Blogs', [HomeController::class, 'Blogs'])->name('Blogs');
         Route::get('/ContactUs', [HomeController::class, 'ContactUs'])->name('ContactUs');

         Route::get('/{slug}', [CarController::class, 'carDetail'])->name('car.show');


         Route::prefix("car")->name('car.')->group(function () {
            Route::get('/index', [CarController::class, 'index'])->name('index');
            Route::post('/store', [CarController::class, 'store'])->name('store');
            Route::delete('/destroy/{id}', [CarController::class, 'destroy'])->name('destroy');
            Route::post('/sort', [CarController::class, 'sort'])->name('sort');
        });

        Route::prefix("carFeature")->name('carFeature.')->group(function () {
            Route::get('/index', [CarFeatureController::class, 'index'])->name('index');
            Route::post('/store', [CarFeatureController::class, 'store'])->name('store');
            Route::delete('/destroy/{id}', [CarFeatureController::class, 'destroy'])->name('destroy');
            Route::post('/sort', [CarFeatureController::class, 'sort'])->name('sort');
        });

        Route::prefix("LuggageGuideline")->name('LuggageGuideline.')->group(function () {
            Route::get('/index', [LuggageGuidelineController::class, 'index'])->name('index');
            Route::post('/store', [LuggageGuidelineController::class, 'store'])->name('store');
            Route::delete('/destroy/{id}', [LuggageGuidelineController::class, 'destroy'])->name('destroy');
            Route::post('/sort', [LuggageGuidelineController::class, 'sort'])->name('sort');
        });

        Route::prefix("LuggageOption")->name('LuggageOption.')->group(function () {
            Route::get('/index', [LuggageOptionController::class, 'index'])->name('index');
            Route::post('/store', [LuggageOptionController::class, 'store'])->name('store');
            Route::delete('/destroy/{id}', [LuggageOptionController::class, 'destroy'])->name('destroy');
            Route::post('/sort', [LuggageOptionController::class, 'sort'])->name('sort');
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
