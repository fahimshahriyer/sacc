<?php

namespace App\Repositories\Invoice;

use App\Models\InvoiceItem;
use App\Repositories\BaseRepository;

class InvoiceItemRepository extends BaseRepository
{
    protected $model;
    /**
     * InvoiceItemRepository constructor.
     * @param InvoiceItem $model
     */
    public function __construct(InvoiceItem $model)
    {
        $this->model = $model;
    }
}