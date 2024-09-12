<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::latest()->paginate();
        return view('admin.feature.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data=[

            'title'        => $request->title,
            'description' => $request->description,

        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/feature');
            $data['thumbnail'] = $file_name;
        }
        Feature::create($data);
        Session::flash('create');
        return redirect()->route('feature.index')->with('create',' Feature Successfully Created');
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
        $feature = Feature::where('id', $id)->first();
        // return $package;
        return view('admin.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title'        => $request->title,
            'description' => $request->description,
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/feature');
            $data['thumbnail'] = $file_name;
        }
        Feature::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('feature.index')->with('warning', ' feature Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feature::where('id', $id)->delete();
        return redirect()->route('feature.index');
    }
}
