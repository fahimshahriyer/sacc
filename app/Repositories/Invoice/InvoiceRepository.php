<?php

namespace App\Repositories\Invoice;

use App\Models\Invoice;
use App\Repositories\BaseRepository;
use App\Repositories\Invoice\InvoiceItemRepository as InvoiceItem;

class InvoiceRepository extends BaseRepository implements InvoiceRepositoryInterface
{
    /**
     * @var Invoice
     */
    protected $model;
    /**
     * @var InvoiceItemRepository
     */
    private $invoice_item;

    /**
     * InvoiceRepository constructor.
     * @param Invoice $invoice
     * @param InvoiceItemRepository $invoice_item
     */
    public function __construct(Invoice $invoice, InvoiceItem $invoice_item)
    {
        $this->model= $invoice;
        $this->invoice_item = $invoice_item;
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public function getInvoiceWithInvoiceItems($id)
    {
        $invoice = $this->with('items')->getById($id);
        return $invoice;
    }

    public function getInvoiceItemsByInvoiceId($id)
    {
        return $invoice_items = $this->invoice_item->where('invoice_id',$id)->get();
    }

    public function getInvoiceStudentByInvoiceId($id)
    {
        // TODO: Implement getInvoiceStudentByInvoiceId() method.
    }

}