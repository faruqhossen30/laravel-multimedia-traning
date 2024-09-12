<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicepageController extends Controller
{
    public function servicePage()  {
        // $service = Service::with('categories')->get();
        // return  $service;
        $category = null;
        if (isset($_GET['category']) && $_GET['category']) {
            $category = $_GET['category'];
        }

        $services = Service::when($category, function ($query) use ($category) {
            return $query->whereHas('categories', function ($q) use ($category) {
                return $q->where('service_id', $category);
            });
        })->paginate(6);
        // return  $services;
        $categories = Category::get();
        return view('pages.servicepage',compact('categories','services'));
    }
}
