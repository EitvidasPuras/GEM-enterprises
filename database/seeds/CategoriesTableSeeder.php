<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name='Beryl';
        $category->timestamps = false;
        $category->save();

        $category = new Category();
        $category->name='Corundum';
        $category->timestamps = false;
        $category->save();

        $category = new Category();
        $category->name='Quartz';
        $category->timestamps = false;
        $category->save();
    }
}
