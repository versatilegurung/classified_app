<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AdCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);

            //     return [
            //  'id' => $this->id,
            // 'title' => $this->title,
            // 'description' => $this->description,
            // 'category_id' => $this->category_id,
            // 'sub_category_id' => $this->sub_category_id,
            // 'location' => $this->location,
            // 'price' => $this->price,
            // 'condition' => $this->condition,
            // 'negotiable' => $this->negotiable,
            // 'images' => $this->images,
            // 'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            // ];                        
    }
}
