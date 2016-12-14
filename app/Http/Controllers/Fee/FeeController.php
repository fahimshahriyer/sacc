<?php

namespace App\Http\Controllers\Fee;

use App\Http\Requests\StoreNewFee;
use App\Repositories\Fee\FeeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeeController extends Controller
{
    /**
     * @var FeeRepository
     */
    protected $fee;

    public function __construct(FeeRepository $fee)
    {

        $this->fee = $fee;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['fees'] = $this->fee->orderBy('name','asc')->get();
        return view('fees.index', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['fee'] = $this->fee->getById($id);
        return view('fees.show', $data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('fees.create');
    }

    /**
     * Store a new fee
     *
     * @param StoreNewFee $request
     * @return \Response
     */
    public function store(StoreNewFee $request)
    {
        $this->fee->create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('/fee');
    }
}
