<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Resources\Product;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     */
    public function toArray($request): array|\JsonSerializable|Arrayable
    {
        return parent::toArray($request);
    }
}
