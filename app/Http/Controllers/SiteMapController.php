<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SiteMapController extends Controller
{
    public function index()
    {
        return response()->view('sitemap.index', [], 200)
            ->header('Content-Type', 'application/xml');
    }

    public function basic()
    {
        $routeCollection = Route::getRoutes();

        return response()->view('sitemap.basic', compact('routeCollection'), 200)
            ->header('Content-Type', 'application/xml');
    }
}
