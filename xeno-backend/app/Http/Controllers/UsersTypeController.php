<?php

namespace App\Http\Controllers;

use App\UsersType;
use Illuminate\Http\Request;

class UsersTypeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userstype = new UsersType;
        $userstype->name = $request->name;
        $userstype->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsersType  $usersType
     * @return \Illuminate\Http\Response
     */
    public function show(UsersType $usersType)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsersType  $usersType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersType $usersType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsersType  $usersType
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersType $usersType)
    {
        //
    }
}
