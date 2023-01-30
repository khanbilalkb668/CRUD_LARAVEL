<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return [
        //     'id' => $this->id,
        //    'mobile' =>$this->mobile,
        //    'created_at' => $this->created_at,
        //    'updated_at' => $this->updated_at,
           'deleted_at'=>$this->deleted_at,
        ];
    }
}
