<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $activities = Activity::query()->latest()->take(5)->get();

        return view('home', compact('activities'));
    }
}
