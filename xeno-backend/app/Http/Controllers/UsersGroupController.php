<?php

namespace App\Http\Controllers;

use App\UsersGroup;
use Illuminate\Http\Request;

class UsersGroupController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usersgroup = new UsersGroup;
        $usersgroup->name = $request->name;
        $usersgroup->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsersGroup  $usersGroup
     * @return \Illuminate\Http\Response
     */
    public function show(UsersGroup $usersGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsersGroup  $usersGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersGroup $usersGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsersGroup  $usersGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersGroup $usersGroup)
    {
        //
    }
}
