<?php

namespace App\Http\Controllers;

use App\Repositories\Invoice\InvoiceRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Repositories\InvoiceRepository;
use Illuminate\Http\Response;

/**
 * Class InvoiceController
 * @package App\Http\Controllers
 */
class InvoiceController extends Controller
{
    /**
     * The Invoice Repository Instance
     *
     * @var InvoiceRepository
     */
    protected $invoices;

    /**
     * InvoiceController constructor.
     * @param InvoiceRepository $invoices
     *
     * @return void
     */
	public function __construct(InvoiceRepositoryInterface $invoices)
	{
		$this->middleware('auth');

        $this->invoices = $invoices;
	}

    /**
     * @return Response
     */
    public function index()
    {
        return view('invoices.index', [
                'invoices' => $this->invoices->getAll()
        ]);
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
        $data['items'] = $this->invoices->getInvoiceItemsByInvoiceId($id);

        return view('invoices.details' , $data);
    }

}
