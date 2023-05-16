<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Resources\Product;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     */
    public function toArray($request): array|\JsonSerializable|Arrayable
    {
        return [
            'name' => $this->name,
            'unit_price' => $this->price,
            'currency' => $this->currency,
            'quantity' => $this->pivot->quantity,
            'amount' => $this->price * $this->pivot->quantity,
        ];
    }
}
