<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Available;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AvailableController extends Controller
{
    /**
     * Display a listing quantity available of tickets.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $available = Available::first()->qty;
        $total = Ticket::sum('qty');
        $result = ($available > $total ) ? $available - $total : $available;
        return response()->json($result, 201);
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
     * @param  \App\Models\Available  $available
     * @return \Illuminate\Http\Response
     */
    public function show(Available $available)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Available  $available
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Available $available)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Available  $available
     * @return \Illuminate\Http\Response
     */
    public function destroy(Available $available)
    {
        //
    }
}
