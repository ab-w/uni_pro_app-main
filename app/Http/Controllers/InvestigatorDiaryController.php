<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvestigatorDiaryRequest;
use App\Http\Requests\UpdateInvestigatorDiaryRequest;
use App\Models\InvestigatorDiary;

class InvestigatorDiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('Docket/investigatorDiary');
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
    public function store(StoreInvestigatorDiaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InvestigatorDiary $investigatorDiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvestigatorDiary $investigatorDiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvestigatorDiaryRequest $request, InvestigatorDiary $investigatorDiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvestigatorDiary $investigatorDiary)
    {
        //
    }
}
