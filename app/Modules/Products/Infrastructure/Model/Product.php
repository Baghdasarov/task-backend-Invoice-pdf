<?php

declare(strict_types=1);

namespace App\Modules\Products\Infrastructure\Model;

use App\Modules\Invoices\Infrastructure\Model\Invoice;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id';

    public function invoice(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Invoice::class, 'invoice_product_lines');
    }
}
