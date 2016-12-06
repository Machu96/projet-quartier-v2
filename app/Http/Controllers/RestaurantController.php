<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function indexAdmin()
    {
        return view('dashboard.restaurant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Restaurant $restaurant)
    {
<<<<<<< HEAD
        $urlImage = str_random(32) . '.' . $request->image->clientExtension();
        $request->image->storeAs('images/restaurants', $urlImage);

=======
>>>>>>> 72110621022377589d79ffdd40d80b5f1cfd94de
        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->address = $request->address;
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;
<<<<<<< HEAD
        $restaurant->url = $urlImage;
        $restaurant->save();

        return redirect()->back()->with('success', 'Le restaurant/bar a bien été ajouté !');
=======
        $restaurant->save();
>>>>>>> 72110621022377589d79ffdd40d80b5f1cfd94de
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
