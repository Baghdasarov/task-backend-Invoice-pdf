<?php

namespace App\Infrastructure\Http\Resources\Invoice;

use App\Infrastructure\Http\Resources\Company\CompanyResource;
use App\Infrastructure\Http\Resources\Product\ProductCollection;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     */
    public function toArray($request): array|\JsonSerializable|Arrayable
    {
        return [
            'number' => $this->number,
            'date' => $this->date,
            'due_date' => $this->due_date,
            'status' => $this->status,
            'products' => new ProductCollection($this->products),
            'company' => new CompanyResource($this->company),
        ];
    }
}
