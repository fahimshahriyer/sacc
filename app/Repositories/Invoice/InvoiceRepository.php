<?php

namespace App\Repositories\Invoice;

use App\Repositories\Invoice\InvoiceRepositoryInterface;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Student;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    /**
     * @var Invoice
     */
    private $invoice;
    /**
     * @var InvoiceItem
     */
    private $items;
    /**
     * @var Student
     */
    private $student;

    /**
     * InvoiceRepository constructor.
     * @param Invoice $invoice
     * @param InvoiceItem $items
     * @param Student $student
     */
    public function __construct(Invoice $invoice, InvoiceItem $items, Student $student)
    {

        $this->invoice = $invoice;
        $this->items = $items;
        $this->student = $student;
    }

    public function getAll()
    {
        return $this->invoice->orderBy('created_at', 'asc')->get();
    }

    public function getById($id)
    {
        return $this->invoice->where('id', $id)->first();
    }

    public function getInvoiceItemsByInvoiceId($id)
    {
        return $this->items->where('invoice_id', $id)->get();
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function update($id, array $attributes)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}