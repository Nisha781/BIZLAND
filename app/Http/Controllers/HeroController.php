<?php

namespace App\Http\Controllers;

use App\Models\hero;
use App\Http\Requests\StoreheroRequest;
use App\Http\Requests\UpdateheroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $section= hero::latest()->first();
        return view('dashboard.index',compact('section'));
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
    public function store(StoreheroRequest $request)
    {
        //
        $section= new hero();
        $section->user = $request->input('user');
        $section->para = $request->input('para');
        $section->save();
        return redirect()->back()->with('success', 'Section saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateheroRequest $request, hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hero $hero)
    {
        //
    }
}
