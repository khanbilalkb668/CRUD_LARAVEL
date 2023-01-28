<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ResController extends BaseController
{
    public function bilal(){
        try {
            \DB::connection()->getPDO();
            dump('Database connected: ' . \DB::connection()->getDatabaseName());
        }
         
        catch (\Exception $e) {
            dump('Database connected: ' . 'None');
        }
        return view('master');
    }
   
}
