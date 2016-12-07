<?php

namespace App\Http\Controllers;

use App\Place;
use Faker\Provider\File;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = DB::table('places')->get();
        return view('place.index', compact('places'));
    }

    public function indexAdmin(){
        $places = DB::table('places')->get();
        return view('dashboard.place', compact('places'));
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
    public function store(Request $request, Place $place, Filesystem $filesystem)
    {
        $urlImage = str_random(32) . '.' . $request->image->clientExtension();
        $request->image->storeAs('public/places', $urlImage);

        $place->name = $request->name;
        $place->description = $request->description;
        $place->url = $urlImage;
        $place->latitude = $request->latitude;
        $place->longitude = $request->longitude;
        $place->save();

        return redirect()->back()->with('success', 'Le lieu a bien été ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
