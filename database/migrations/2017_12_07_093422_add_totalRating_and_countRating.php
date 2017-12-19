<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->double('totalRating');
        });
        Schema::table('items', function ($table){
            $table->integer('countRating');
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
