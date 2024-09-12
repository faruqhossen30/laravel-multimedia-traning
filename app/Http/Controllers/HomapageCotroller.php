<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Feature;
use Illuminate\Http\Request;

class HomapageCotroller extends Controller
{
    public function homepage()
    {

        $clients  = Client::get();
        $blogs    = Blog::get();
        $features = Feature::get();
        return view('homepage', compact('clients', 'blogs', 'features'));
    }
}
