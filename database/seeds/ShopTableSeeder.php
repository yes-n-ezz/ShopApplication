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
		Shop::create(['shop_name' => 'BELDONA','distance' => 22,'image' => 'BELDONA']);
		Shop::create(['shop_name' => 'BUTCHER BOYS','distance' => 11,'image' => 'BUTCHER BOYS']);
		Shop::create(['shop_name' => 'CHRIST','distance' => 2,'image' => 'CHRIST']);
		Shop::create(['shop_name' => 'WANKO','distance' => 4,'image' => 'WANKO']);
		Shop::create(['shop_name' => 'FRYDAYS','distance' => 23,'image' => 'FRYDAYS']);
		Shop::create(['shop_name' => 'KBTOYS','distance' => 10,'image' => 'KBTOYS']);
		Shop::create(['shop_name' => 'LUISS VITON','distance' => 5,'image' => 'LUISS VITON']);
		Shop::create(['shop_name' => 'SAINSBURYS','distance' => 4,'image' => 'SAINSBURYS']);
		Shop::create(['shop_name' => 'SHOOZ','distance' => 21,'image' => 'SHOOZ']);
		Shop::create(['shop_name' => 'STAGE OF PLAYLORD','distance' => 7,'image' => 'STAGE OF PLAYLORD']);
    }
}
