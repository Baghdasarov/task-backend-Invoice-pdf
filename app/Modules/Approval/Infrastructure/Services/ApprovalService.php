<?php

declare(strict_types=1);

namespace App\Modules\Approval\Infrastructure\Services;

use App\Domain\Enums\StatusEnum;
use App\Modules\Approval\Api\Dto\ApprovalDto;
use App\Modules\Approval\Application\ApprovalFacade;
use App\Modules\Invoices\Infrastructure\Model\Invoice;

class ApprovalService
{
    public function __construct(public ApprovalFacade $approvalFacade,)
    {
    }

    public function approve(Invoice $invoice): Invoice
    {
        $dto = new ApprovalDto($invoice->getId(), StatusEnum::from($invoice->status), Invoice::class);
        $this->approvalFacade->approve($dto);
        $invoice->update(['status' => StatusEnum::APPROVED]);
        return $invoice;
    }

    public function reject(Invoice $invoice): Invoice
    {
        $dto = new ApprovalDto($invoice->getId(), StatusEnum::from($invoice->status), Invoice::class);
        $this->approvalFacade->reject($dto);
        $invoice->update(['status' => StatusEnum::REJECTED]);
        return $invoice;
    }
}
