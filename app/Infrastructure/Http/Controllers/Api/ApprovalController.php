<?php

declare(strict_types=1);

namespace App\Infrastructure\Http\Controllers\Api;

use App\Infrastructure\Controller;
use App\Modules\Approval\Infrastructure\Services\ApprovalService;
use App\Modules\Invoices\Infrastructure\Model\Invoice;
use Illuminate\Http\Response;

class ApprovalController extends Controller
{
    public function __construct(public ApprovalService $approvalService)
    {
    }

    public function approve(Invoice $invoice): Response
    {
        $this->approvalService->approve($invoice);

        return response()->noContent();
    }

    public function reject(Invoice $invoice): Response
    {
        $this->approvalService->reject($invoice);

        return response()->noContent();
    }
}
