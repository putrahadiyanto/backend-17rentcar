<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'brand' => $this->brand,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image,
            'capacity' => $this->capacity,
            'transmission' => $this->transmission,
            'fuelType' => $this->fuelType,
            'year' => $this->year,
            'color' => $this->color,
            'shortDescription' => $this->shortDescription,
            'description' => $this->description,
            'features' => $this->features,
        ];
    }
}
