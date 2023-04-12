<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('products')->delete();

		/*
		* Products Types
		*
		*/
		$Products = array_fill(0, 6, []);

		/*
		* Add Products
		*
		*/
		$model = new Product();

		foreach ($Products as $key => $Product) {
			$model::updateOrCreate([
				'title'       => 'Oculus VR - ' . ($key + 1),
				'rating'      => ($key % 5) + 1,
				'price'   => 149 + $key,
				'image' => '/storage/img/product.avif',
				'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
				'categories_id' => ($key % 5) + 1  // TODO: make dynamic
			]);
		}
	}
}
