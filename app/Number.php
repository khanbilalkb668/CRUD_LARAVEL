<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Number extends Model
{
    use SoftDeletes;
    protected $table = "numbers";
    // protected $dates = ['deleted_at'];

    
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}


