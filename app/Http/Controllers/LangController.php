<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class LangController extends Controller
{
    public function index($lang,$routeName) {
        app()->setLocale($lang);
        return redirect(url()->route($routeName,$lang));
    }
}
