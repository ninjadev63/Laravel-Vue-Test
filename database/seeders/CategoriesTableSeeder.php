<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->delete();

		/*
		* Categories Types
		*
		*/
		$Categories = [
			[
				'label'      => 'Bags',
			],
			[
				'label'      => 'Flower Port',
			],
			[
				'label'      => 'Watch',
			],
			[
				'label'      => 'Accessories',
			],
			[
				'label'      => 'Game Accessories',
			],
		];

		/*
		* Add Categories
		*
		*/

		foreach ($Categories as $Category) {
			$category = new Category(array(
				'label' => $Category['label']
			));

			$category->timestamps = false;
			$category->save();
		}
	}
}
