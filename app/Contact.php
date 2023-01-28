<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    public function number()
    {
        return $this->hasMany('App\Number','st_id');
    }
}
 