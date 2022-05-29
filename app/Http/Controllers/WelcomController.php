<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomController extends Controller
{
    public function store(Request $request)
    {
        $alertes = DB::table('alertes')->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('alertes'));
    }
}
