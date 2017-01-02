<?php

namespace App\Http\Controllers\Payplan;

use App\Http\Requests\StoreNewPayplan;
use App\Repositories\Fee\FeeRepository;
use App\Repositories\Payplan\PayplanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayplanController extends Controller
{
    protected $payplan;

    protected $fee;

    /**
     * PayplanController constructor.
     * @param PayplanRepository $payplan ]
     * @param FeeRepository $fee
     */
    public function __construct(PayplanRepository $payplan, FeeRepository $fee)
    {
        $this->payplan = $payplan;

        $this->fee=$fee;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['payplans'] = $this->payplan->orderBy('name' ,'asc')->get();
        return view('payplans.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payplans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNewPayplan $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewPayplan $request)
    {

        $payplan = $this->payplan->create([
            'name' => $request->name,
            'description' => $request->description,
            'billing_cycle' => $request->billing_cycle,
            'payplan_terms' => $request->payplan_terms,
            'is_recurring' => $is_recurring
        ]);

        return redirect(route('payplan.show', $payplan->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['payplan'] = $this->payplan->getById($id);
        $data['payplanFees'] = $this->fee->where('payplan_id', $id , '=');
        return view('payplans.show', $data);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
