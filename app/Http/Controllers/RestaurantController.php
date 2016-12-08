<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = DB::table('restaurants')
            ->select(
                'name' . session('locale') . ' as name',
                'description' . session('locale') . ' as description',
                'url',
                'address'
            )->get();

        return view('restaurants.index', compact('restaurants'));
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
        $urlImage = str_random(32) . '.' . $request->image->clientExtension();
        $request->image->storeAs('public/restaurants', $urlImage);

        $restaurant->nameFr = $request->nameFr;
        $restaurant->nameEn = $request->nameEn;
        $restaurant->descriptionFr = $request->descriptionFr;
        $restaurant->descriptionEn = $request->descriptionEn;
        $restaurant->address = $request->address;
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;
        $restaurant->url = $urlImage;
        $restaurant->save();

        return redirect()->back()->with('success', 'Le restaurant/bar a bien été ajouté !');
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
