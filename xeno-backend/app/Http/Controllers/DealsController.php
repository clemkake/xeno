<?php

namespace App\Http\Controllers;

use DB;
use App\deals;
use App\Contacts;
use Illuminate\Http\Request;

class DealsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function show(deals $deals)
    {
        $deals = deals::where('company', '=', auth()->user()->company)->get();
        return response()->json($deals,201); 
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function showDealsContact(deals $deals)
    {
        $dealsContact = DB::table('contacts')
        ->join('deals', 'contacts.deal', '=', 'deals.id')
        ->select('contacts.*', 'deals.title as deals_name')
        ->get();
        
        return response()->json($dealsContact,201); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function edit(deals $deals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, deals $deals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function destroy(deals $deals)
    {
        //
    }
}
