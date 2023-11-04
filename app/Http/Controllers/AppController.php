<?php

namespace App\Http\Controllers;

use App\Models\app;
use App\Http\Requests\StoreappRequest;
use App\Http\Requests\UpdateappRequest;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreappRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(app $app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(app $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateappRequest $request, app $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(app $app)
    {
        //
    }
}
