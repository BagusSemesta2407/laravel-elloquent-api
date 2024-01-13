<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // "data" => $this->collection, this collection (model) akan direturnkan dalam bentuk serialization. karena serialization akan mengembalikan semua data
            "data" => CategorySimpleResource::collection($this->collection), // jika dilakukan unit test maka atribut created_at dan updated_at akan hilang. dan unit test akan menganggap itu sebuah error 
            "total" => count($this->collection)
        ];
    }
}
