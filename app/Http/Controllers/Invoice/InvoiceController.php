<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Invoice\InvoiceRepositoryInterface as Invoice;
use App\Repositories\Invoice\InvoiceItemRepository as InvoiceItem;
use App\Repositories\Student\StudentRepository as Student;

/**
 * Class InvoiceController
 * @package App\Http\Controllers
 */
class InvoiceController extends Controller
{
    /**
     * The Invoice Repository Instance
     *
     * @var Invoice
     */
    protected $invoices;

    /**
     * The Invoice Item Repository Instance
     *
     * @var InvoiceItem
     */
    protected $invoiceItem;

    /**
     * @var Student
     */
    protected $student;

    /**
     * InvoiceController constructor.
     *
     * @param Invoice $invoices
     * @param InvoiceItem $invoiceItem
     */
	public function __construct(Invoice $invoices, InvoiceItem $invoiceItem, Student $student)
	{
        $this->invoices = $invoices;
        $this->invoiceItem = $invoiceItem;
        $this->student = $student;
    }

    /**
     * @return Response
     */
    public function index()
    {
        $data['invoices'] = $this->invoices->orderBy('created_at','asc')->paginate(15);

        return view('invoices.index', $data);
    }

    /**
     * @return Response
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data['invoice'] = $this->invoices->getById($id);
        $data['invoiceItems'] = $this->invoiceItem->where('invoice_id',$id)->get();

        $student_id = $data['invoice']->student_id;

        $data['student'] = $this->student->getById($student_id);

        return view('invoices.details' , $data);
    }

    public function allInvoice(){

        $invoices = $this->invoices->paginate(15);

        return response()->json([
            'model' => $invoices
        ]);
    }
}
