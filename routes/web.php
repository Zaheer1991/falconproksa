<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('index');  // Your main view
});

Route::get('/change-language/{lang}', function ($lang) {
    // Validate the language input (either 'en' or 'ar')
    if (!in_array($lang, ['en', 'ar'])) {
        $lang = 'en';  // Default to English if invalid language is passed
    }

    // Store the selected language in session
    session(['locale' => $lang]);

    // Set the application locale
    App::setLocale($lang);

    // Redirect back to the previous page
    return redirect()->back();
})->name('change.language');
