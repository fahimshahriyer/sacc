<?php

namespace App\Repositories\Invoice;

use App\Models\Invoice;
use App\Repositories\BaseRepository;

class InvoiceRepository extends BaseRepository implements InvoiceRepositoryInterface
{
    /**
     * @var Invoice
     */
    protected $model;

    /**
     * InvoiceRepository constructor.
     * @param Invoice $invoice
     * @internal param Invoice $model
     */
    public function __construct(Invoice $invoice)
    {
        $this->model= $invoice;
    }

    public function getInvoiceItemsByInvoiceId($id)
    {
        return ;
    }

    public function getInvoiceStudentByInvoiceId($id)
    {
        // TODO: Implement getInvoiceStudentByInvoiceId() method.
    }
}