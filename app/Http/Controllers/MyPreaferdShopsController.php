<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Response;
class MyPreaferdShopsController extends Controller
{
    public function show($coordinates)
    {
        //$coordinates variable corresponds to the location of the user
        $coordinates_obj = json_decode($coordinates, true);
        $latitude = $coordinates_obj['lat'];
        $longitude = $coordinates_obj['lon'];
        //Retrieve list of shops liked by the user ordered by distance
        $shops = Shop::where('liked', 1)->get()->sortBy(function ($shop, $key) use ($latitude, $longitude)
        {
            //The function geo_distance allows to calculate the distance between two locations 
            return geo_distance($latitude, $longitude, $shop->latitude, $shop->longitude);
        });
        //Send all data as JSON
        return Response::json($shops);
    }
    public function update($id)
    {
        //this section is dedicated to remove a shop from the prefeared shops rubric after hitting the button remove
        Shop::where('id', $id)->update(['liked' => 0]);
        return Response::json(array(
            'success' => true
        ));
    }
}

