<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewCollection extends JsonResource
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
            'customer' => $this->customer,
            'review' => $this->review,
            'star' => $this->star == 0 ? 'No Star Yet' : $this->star
        ];
    }
}
