<?php

namespace App\Repositories\Invoice;

interface InvoiceRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function getInvoiceItemsByInvoiceId($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);
}