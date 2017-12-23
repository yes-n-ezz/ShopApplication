<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Response;
class NearbyShopsController extends Controller
{
	public function index(){
		return $this->show();
	}
    public function show(){

//Retrieve list of shops based on several criteria 
$shops=Shop::where('dislike_time','<',date('Y-m-d H:i:s',strtotime('-2 hour')))->orWhere('dislike_time',NULL)->where('liked', 0)->get();
//Send all data as JSON
return Response::json($shops);
    }
    
    public function update($action,$id){
        //This section is dedicated to update the status of a shop 
    	switch ($action) {
    		case 'like':
    			Shop::where('id',$id)->update(['liked'=>1]);
  
    			break;
    		case 'dislike':
    		Shop::where('id',$id)->update(['dislike_time'=>date('Y-m-d H:i:s')]);
    			break;

    	}
    	return Response::json(array('success' => true));

    }
}
