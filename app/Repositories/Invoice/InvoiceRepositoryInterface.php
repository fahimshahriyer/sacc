<?php

namespace App\Repositories\Invoice;

use App\Repositories\BaseRepositoryInterface;

interface InvoiceRepositoryInterface extends BaseRepositoryInterface
{
    public function getInvoiceWithInvoiceItems($id);

    public function getInvoiceItemsByInvoiceId($id);

    public function getInvoiceStudentByInvoiceId($id);

}