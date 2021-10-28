<?php

namespace App\Http\Controllers;

use App\Http\Resources\PepoleRecource;
use App\Http\Resources\PepoleResource;
use App\Http\Resources\PepoleResourceCollection;
use App\Pepole;
use Illuminate\Http\Request;

class PepoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  PepoleResource::collection(Pepole::all());
    }



    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

            return view('pepole.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          Pepole::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pepole  $pepole
     * @return \Illuminate\Http\Response
     */
    public function show(Pepole $pepole)
    {
        return  new PepoleResource($pepole);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pepole  $pepole
     * @return \Illuminate\Http\Response
     */
    public function edit(Pepole $pepole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pepole  $pepole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pepole $pepole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pepole  $pepole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pepole $pepole)
    {
        //
    }
}
