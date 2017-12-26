<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Response;
class NearbyShopsController extends Controller
{

    public function show($coordinates)
    {
        //$coordinates variable corresponds to the location of the user
        $coordinates_obj = json_decode($coordinates, true);
        $latitude = $coordinates_obj['lat'];
        $longitude = $coordinates_obj['lon'];
        //Retrieve list of shops based on several criteria
        //Dislike time equals to NULL as default value
        $shops = Shop::where('dislike_time', '<', date('Y-m-d H:i:s', strtotime('-2 hour')))->orWhere('dislike_time', NULL)
            ->where('liked', 0)
            ->get()->sortBy(function ($shop, $key) use ($latitude, $longitude)
        {
            //The function geo_distance allows to calculate the distance between two locations
            return geo_distance($latitude, $longitude, $shop->latitude, $shop->longitude);
        });
        //Send all data as JSON
        return Response::json($shops);
    }

    public function update($action, $id)
    {
        //This section is dedicated to update the status of a shop
        switch ($action)
        {
            case 'like':
                //In case the user hits the button like
                Shop::where('id', $id)->update(['liked' => 1]);

            break;
            case 'dislike':
                //In case the user hits the button Dislike
                Shop::where('id', $id)->update(['dislike_time' => date('Y-m-d H:i:s') ]);
            break;

        }
        return Response::json(array(
            'success' => true
        ));

    }
}

