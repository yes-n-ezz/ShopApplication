<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
class MyPreaferdShopsController extends Controller
{
    public function show(){
    	//Retrieve list of shops liked by the user ordered by distace 
$shops=Shop::where('liked', 1)->orderBy('distance')->get();
return view('mypreafered_shops',compact('shops'));
    }
    public function update($id){
    	//this section is dedicated to remove a shop from the prefeared shops rubric after hitting the button remove
    	Shop::where('id',$id)->update(['liked'=>0]);
    	return redirect('/myPreferedShops');
    }
}
