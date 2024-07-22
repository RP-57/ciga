<?php

namespace App\Http\Controllers;
use App\Models\Apssoc;

use Illuminate\Http\Request;
use App\Http\Requests\StoreApssocRequest;
use App\Http\Requests\UpdateApssocRequest;

class ApssocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Apssoc $apssocs)
    {
        //
        echo $apssocs;
        dd($apssocs);

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
    public function store(StoreApssocRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Apssoc $apssoc)
    {
        //
        echo $apssoc;
        //dd($apssoc);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apssoc $apssoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApssocRequest $request, Apssoc $apssoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apssoc $apssoc)
    {
        //
    }
}
