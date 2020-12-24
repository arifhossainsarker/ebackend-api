<?php

namespace App\Http\Resources\product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
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
            'number'=>$this->id,
            'name'=>$this->name,
            'TotalPrice'=>round((1-$this->discount/100) * $this->price,2),
            'photo' => $this->image,
            'link'=>[
                'Product'=>route('products.show',$this->id)
            ]
        ];
    }
}
