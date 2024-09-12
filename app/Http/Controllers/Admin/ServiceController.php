<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.service.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate(
            [
                'title'               => 'required',
                'short_description'   => 'required',
                'description'         => 'required',
            ]
        );
        $data = [
            'title'             => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'description_code'  => $request->description_code,
            'price'             => $request->price,
        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/Service');
            $data['thumbnail'] = $file_name;
        }
        $service = Service::create($data);
        // $service->categories()->attach($request->category_ids);


        if (!empty($request->category_ids)) {
            foreach ($request->category_ids as $id) {
                ServiceCategory::create([
                    'service_id' => $service->id,
                    'category_id' => $id
                ]);
            }
        }

        Session::flash('create');
        return redirect()->route('service.index')->with('create', 'Service successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::with('categories')->firstWhere('id', $id);
        $categories = Category::get();

        $cat_ids = $service->categories->pluck('id')->toArray();


        return view('admin.service.edit', compact('categories', 'service', 'cat_ids',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title'               => 'required',
                'short_description'   => 'required',
                'description'         => 'required',
            ]
        );

        $data = [
            'title'             => $request->title,
            'slug'              => Str::slug($request->title, '-'),
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'description_code'  => $request->description_code,
            'price'             => $request->price,
        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/Service');
            $data['thumbnail'] = $file_name;
        }

        $service = Service::firstWhere('id', $id)->update($data);

        if (!empty($request->category_ids)) {
            ServiceCategory::where('service_id', $id)->delete();
            foreach ($request->category_ids as $cat) {
                ServiceCategory::create([
                    'service_id'     => $id,
                    'category_id' => $cat
                ]);
            }
        }



        Session::flash('warning');
        return redirect()->route('service.index')->with('warning', ' Service Successfully Updated');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        Storage::delete($service->thumbnail);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'data successfully Deleted');
    }
}
