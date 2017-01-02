<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\ApiController;
use App\Repositories\Invoice\InvoiceRepository;
use Illuminate\Http\Request;

class InvoiceApiController extends ApiController
{
    /**
     * @var InvoiceRepository
     */
    private $invoice;

    /**
     * InvoiceApiController constructor.
     * @param InvoiceRepository $invoice
     */
    public function __construct(InvoiceRepository $invoice)
    {

        $this->invoice = $invoice;
    }
    /**
     * @return mixed
     */
    public function allInvoice(){

        $invoices = $this->invoice->get();

        return response()->json([
            'data' => $invoices
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function invoiceById($id)
    {
        $invoice = $this->invoice->getInvoiceWithInvoiceItems($id);

        if (! $invoice)
        {
            return $this->respondNotFound('Invoice Does Not Exist');
        }

        return $this->respond([
            'invoice' => $invoice
        ]);
    }

    /**
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function allInvoiceByStudentId($id)
    {
        $invoices = $this->invoice->where('student_id', $id, '=')->get();

        return $this->respond([
            'data' => $invoices
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
