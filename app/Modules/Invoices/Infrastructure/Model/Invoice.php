<?php

declare(strict_types=1);

namespace App\Modules\Invoices\Infrastructure\Model;

use App\Modules\Companies\Infrastructure\Model\Company;
use App\Modules\Products\Infrastructure\Model\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Invoice extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'status',
    ];

    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'invoice_product_lines')->withPivot('quantity');
    }

    public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function getId(): UuidInterface
    {
        return Uuid::fromString($this->id);
    }
}
