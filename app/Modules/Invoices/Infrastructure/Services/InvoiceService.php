<?php

declare(strict_types=1);

namespace App\Modules\Invoices\Infrastructure\Services;

use App\Modules\Invoices\Infrastructure\Model\Invoice;
use Illuminate\Database\Eloquent\Collection;

class InvoiceService
{
    public function getList(): Collection|array
    {
        return Invoice::query()->with(['company','products'])->get();
    }
}
