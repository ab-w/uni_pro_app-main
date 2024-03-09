<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorestatementPadRequest;
use App\Http\Requests\UpdatestatementPadRequest;
use App\Models\statementPad;

class StatementPadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('Docket/statementPad');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestatementPadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(statementPad $statementPad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(statementPad $statementPad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestatementPadRequest $request, statementPad $statementPad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(statementPad $statementPad)
    {
        //
    }
}
