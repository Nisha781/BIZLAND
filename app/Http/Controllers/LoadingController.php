<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Http\Requests\StoreloadingRequest;
use App\Http\Requests\UpdateloadingRequest;
use App\Models\Tab;

class LoadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $setting=Dashboard::latest()->first();
        $data=Tab::all();
        return view('loading.index',compact('setting','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreloadingRequest $request)
    {
        //
    
    }

    /**
     * Display the specified resource.
     */
    public function show(loading $loading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(loading $loading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloadingRequest $request, loading $loading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loading $loading)
    {
        //
    }
}
