<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowcaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->is_active ? 'Active' : 'Inactive',
            'user' => UserResource::make($this->user),
            'products' => $this->products,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
