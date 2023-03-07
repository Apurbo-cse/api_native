<?php

namespace App\Http\Controllers;

use App\Models\Greetings;
use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $greetings = Greetings::all();
        return response()->json($greetings);
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
        // return("hello world");
       
        
        $data = Greetings::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);


        return response()->json([
            'status' => 200,
            'message' => 'Greetings Added',
            'data' => $data,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Greetings  $greetings
     * @return \Illuminate\Http\Response
     */
    public function show(Greetings $greetings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Greetings  $greetings
     * @return \Illuminate\Http\Response
     */
    public function edit(Greetings $greetings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Greetings  $greetings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Greetings $greetings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Greetings  $greetings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Greetings $greetings)
    {
        //
    }
}
