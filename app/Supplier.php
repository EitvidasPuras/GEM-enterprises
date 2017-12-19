<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'companyName', 'companyCode', 'bankCode', 'address', 'phoneName'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
