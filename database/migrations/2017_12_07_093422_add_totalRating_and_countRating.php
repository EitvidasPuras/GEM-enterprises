<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddTotalRatingAndCountRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function ($table){
            $table->double('totalRating')->default(0);
        });
        Schema::table('items', function ($table){
            $table->integer('countRating')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function ($table){
            $table->dropColumn('totalRating');
        });
        Schema::table('items', function ($table){
            $table->dropColumn('countRating');
        });
    }
}
