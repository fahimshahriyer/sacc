<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
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
    protected $invoice_item;

    /**
     * @var Student
     */
    protected $student;

    /**
     * InvoiceController constructor.
     *
     * @param Invoice $invoices
     * @param InvoiceItem $invoice_item
     * @param Student $student
     */
	public function __construct(Invoice $invoices, InvoiceItem $invoice_item, Student $student)
	{
        $this->invoices = $invoices;
        $this->invoice_item = $invoice_item;
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
        $invoice = $this->invoices->getById($id);

        if (! $invoice){
            abort(404);
        }

        $invoice_items = $this->invoice_item->where('invoice_id',$id)->get();
        $student_id = $invoice->student_id;
        $student = $this->student->getById($student_id);

        return view('invoices.details' ,[
            'invoice' => $invoice,
            'invoice_items' => $invoice_items,
            'student' => $student
        ]);
    }
}
