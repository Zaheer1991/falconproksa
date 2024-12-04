<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if a language is set in the URL (e.g., ?lang=en or ?lang=ar)
        $lang = $request->get('lang', session('locale', 'en')); // Default to English

        // Validate the language, only 'en' or 'ar' are allowed
        if (!in_array($lang, ['en', 'ar'])) {
            $lang = 'en';  // Default to English if invalid language is passed
        }

        // Store the selected language in the session
        session(['locale' => $lang]);

        // Set the application locale
        App::setLocale($lang);

        return $next($request);
    }
}
