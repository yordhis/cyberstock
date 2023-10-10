<?php

namespace App\Http\Controllers;

use App\Models\EntryType;
use App\Http\Requests\StoreEntryTypeRequest;
use App\Http\Requests\UpdateEntryTypeRequest;

class EntryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntryTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntryTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntryType  $entryType
     * @return \Illuminate\Http\Response
     */
    public function show(EntryType $entryType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntryType  $entryType
     * @return \Illuminate\Http\Response
     */
    public function edit(EntryType $entryType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntryTypeRequest  $request
     * @param  \App\Models\EntryType  $entryType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntryTypeRequest $request, EntryType $entryType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntryType  $entryType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntryType $entryType)
    {
        //
    }
}
