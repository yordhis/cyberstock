<?php

namespace App\Http\Controllers;

use App\Models\ProductEntry;
use App\Http\Requests\StoreProductEntryRequest;
use App\Http\Requests\UpdateProductEntryRequest;

class ProductEntryController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductEntryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductEntryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductEntry  $productEntry
     * @return \Illuminate\Http\Response
     */
    public function show(ProductEntry $productEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductEntry  $productEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductEntry $productEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductEntryRequest  $request
     * @param  \App\Models\ProductEntry  $productEntry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductEntryRequest $request, ProductEntry $productEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductEntry  $productEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductEntry $productEntry)
    {
        //
    }
}
