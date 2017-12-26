<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//This section is dedicated to fill my table Shops with some data to test our application
    	//shops.json file contains the data imported from a MongoDB database
    	$data = File::get("database/data/shops.json");
		$converts = explode("\n", $data);
		foreach ($converts as $convert) {
			$shop=json_decode($convert,true);
			Shop::create([
				'name' => $shop['name'],
				'picture' => $shop['picture'],
				'email' => $shop['email'],
				'city' => $shop['city'],
				'latitude' => $shop['location']['coordinates'][0],
				'longitude' =>$shop['location']['coordinates'][1]
			]);
		}
    }
}
