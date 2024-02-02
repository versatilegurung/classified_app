<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

<<<<<<< HEAD
        return [
=======
        return[
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'sub_category_id' => $this->sub_category_id,
            'location' => $this->location,
            'price' => $this->price,
            'negotiable' => $this->negotiable,
            'condition' => $this->condition,
            'images' => $this->images,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
<<<<<<< HEAD
=======
            // Add other attributes as needed
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
        ];
    }
}