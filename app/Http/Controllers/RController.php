<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Requisition;
use Illuminate\Http\Request;

class RController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reqs = Requisition::paginate(10);

        return view('r.show', compact('reqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assets = Asset::get();
        return view('r.create', compact('assets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // $validate = $request->validate([
        //     'name' => 'required|string|',
        //     'email' => 'required|string|',
        //     'phone' => 'required|string|',
        //     'asset_id' => 'required'
        // ]);

        dump($request->all());
        $req = new Requisition();
        $req->name = $request->name;
        $req->email = $request->email;
        $req->phone = $request->phone;
        $req->asset_id = $request->asset_id;
        $req->save();

        return redirect()->back()->with('success', 'Data Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
