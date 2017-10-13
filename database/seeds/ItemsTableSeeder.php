<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Item();
        $item->name='firstItem';
        $item->price=90.00;
        $item->amount=5;
        $item->category_id=2;
        $item->supplier_id=1;
        $item->description='the description of this item is awesome';
        $item->cover_image='';
        $item->sold=2;
        $item->save();

        $item = new Item();
        $item->name='secondItem';
        $item->price=69.69;
        $item->amount=2;
        $item->category_id=2;
        $item->supplier_id=2;
        $item->description='the description of this item is also awesome';
        $item->cover_image='';
        $item->sold=4;
        $item->save();

        $item = new Item();
        $item->name='thirdItem';
        $item->price=05.99;
        $item->amount=1;
        $item->category_id=1;
        $item->supplier_id=1;
        $item->description='the description of this item is not that awesome';
        $item->cover_image='';
        $item->sold=3;
        $item->save();
    }
}
