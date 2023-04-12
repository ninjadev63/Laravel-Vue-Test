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
				'label'        => 'Bags',
				'is_validated' => true,
			],
			[
				'label'        => 'Flower Port',
				'is_validated' => false,
			],
			[
				'label'        => 'Watch',
				'is_validated' => false,
			],
			[
				'label'        => 'Accessories',
				'is_validated' => false,
			],
			[
				'label'        => 'Game Accessories',
				'is_validated' => false,
			],
		];

		/*
		* Add Categories
		*
		*/

		foreach ($Categories as $Category) {
			$category = new Category(array(
				'label' => $Category['label'],
				'is_validated' => $Category['is_validated'],
			));

			$category->timestamps = false;
			$category->save();
		}
	}
}
