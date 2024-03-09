<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreincidentReportRequest;
use App\Http\Requests\UpdateincidentReportRequest;
use App\Models\incidentReport;

class IncidentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('Docket/incidentReport');
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
    public function store(StoreincidentReportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(incidentReport $incidentReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(incidentReport $incidentReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateincidentReportRequest $request, incidentReport $incidentReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(incidentReport $incidentReport)
    {
        //
    }
}
