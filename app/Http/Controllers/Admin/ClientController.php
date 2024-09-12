<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::latest()->paginate();
        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required',
        ]);
        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/client/');
            $data['thumbnail'] = $file_name;
        }

        Client::create($data);
        Session::flash('create');
        return redirect()->route('client.index')->with('create', ' Client Successfully Created');
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
        $client = Client::where('id', $id)->first();
        // return $package;
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/client/');
            $data['thumbnail'] = $file_name;
        }
        Client::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('client.index')->with('warning', ' client Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        Storage::delete($client->thumbnail);
        $client->delete();
        return redirect()->route('client.index')->with('success','data successfully Deleted');
    }
}
