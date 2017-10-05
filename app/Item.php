<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    public $primaryKey = 'id';
    public $timestamps = true;
}
