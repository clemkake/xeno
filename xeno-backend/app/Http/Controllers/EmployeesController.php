<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Notifications\VerifyEmail;


class EmployeesController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required|min:6'
        ]);

        $users = new Employees;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->last_name = $request->last_name;
        $users->nickname = '';
        $users->company = 1;
        $users->title = 3;
        $users->image = 'https://via.placeholder.com/48';
        $users->manager_id = 1;
        $users->about_me = '';
        $users->work_phone = '00000000';
        $users->mobile_phone = '00000000';
        $users->fax = '00000000'; 
        $users->street_address = '';
        $users->city = '';
        $users->state_province = '';
        $users->postal_code = '';
        $users->country = $request->country;
        $users->activation_token = str_random(60);
        $users->save(); 

        $users->notify(new VerifyEmail);

        return response()->json([
            "message"=>"success"
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employee)
    {
        //
        $users = Employees::where('email', $request->email);
        return $response->json($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  employee
     * @return \Illuminate\Http\Response
     */
    public function confirmation(Request $request, $token)
    {
        //$token = $request->input('token');
        $user = Employees::where('activation_token', $token)->first();
        if (!$user) {
            return response()->json([
                'message' => 'This activation token is invalid.'
            ], 404);
        }
        $user->active = true;
        $user->activation_token = '';
        $user->save();

        return response()->json([
            'message' => 'Your account has been validated with success'
        ], 201);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employee)
    {
        $users = App\Employees::where('email', $request->email);
        $users->name = $request->name;
        $users->last_name = $request->last_name;
        $users->nickname = $request->nickname;
        $users->title = $request->title;
        $users->manager_id = $request->manager_id;
        $users->about_me = $request->about_me;
        $users->work_phone = $request->work_phone;
        $users->mobile_phone = $request->mobile_phone;
        $users->fax = $request->fax;
        $users->street_address = $request->street_address;
        $users->city = $request->city;
        $users->state_province = $request->state_province;
        $users->postal_code = $request->postal_code;
        $users->country = $request->country;
        $users->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employee)
    {
        //
    }
}
