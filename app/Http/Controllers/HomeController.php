<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activities = Activity::query()->latest()->take(5)->get();

        return view('home', compact('activities'));
    }
}
