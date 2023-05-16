<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Controllers\Api;

use App\Infrastructure\Controller;
use App\Infrastructure\Http\Resources\Invoice\InvoiceCollection;
use App\Modules\Invoices\Infrastructure\Services\InvoiceService;

class InvoiceController extends Controller
{
    public function __construct(public InvoiceService $invoiceService)
    {
    }

    public function index(): InvoiceCollection
    {
        return new InvoiceCollection($this->invoiceService->getList());
    }
}
