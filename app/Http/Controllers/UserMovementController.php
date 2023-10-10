<?php

namespace App\Http\Controllers;

use App\Models\UserMovement;
use App\Http\Requests\StoreUserMovementRequest;
use App\Http\Requests\UpdateUserMovementRequest;

class UserMovementController extends Controller
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
     * @param  \App\Http\Requests\StoreUserMovementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserMovementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMovement  $userMovement
     * @return \Illuminate\Http\Response
     */
    public function show(UserMovement $userMovement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMovement  $userMovement
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMovement $userMovement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserMovementRequest  $request
     * @param  \App\Models\UserMovement  $userMovement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserMovementRequest $request, UserMovement $userMovement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMovement  $userMovement
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMovement $userMovement)
    {
        //
    }
}
