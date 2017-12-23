<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Response;
class MyPreaferdShopsController extends Controller
{
    public function show(){
    	//Retrieve list of shops liked by the user ordered by distace 
$shops=Shop::where('liked', 1)->orderBy('distance')->get();
//Send all data as JSON
return Response::json($shops);
    }
    public function update($id){
    	//this section is dedicated to remove a shop from the prefeared shops rubric after hitting the button remove
    	Shop::where('id',$id)->update(['liked'=>0]);
    	 return Response::json(array('success' => true));
    }
}
