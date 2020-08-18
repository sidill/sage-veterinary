<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clients = Client::query()
            ->where('created_at', '>=', now()->startOfWeek()->toDateString())
            ->get()
            ->count();
        $previousClients = Client::query()
            ->where('created_at', '>=', now()->subWeek()->startOfWeek()->toDateString())
            ->where('created_at', '<', now()->startOfWeek()->toDateString())
            ->get()
            ->count();
        return view('home', compact('clients', 'previousClients'));
    }
}
