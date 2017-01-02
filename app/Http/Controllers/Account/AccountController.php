<?php

namespace App\Http\Controllers\Account;

use App\Http\Requests\StoreAccountRequest;
use App\Repositories\Account\AccountTypeRepository;
use App\Repositories\Account\AccountRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * @var AccountRepository
     */
    private $account;

    /**
     * @var AccountTypeRepository
     */
    private $type;

    /**
     * AccountController constructor.
     * @param AccountRepository $account
     * @param AccountTypeRepository $type
     */
    public function __construct(AccountRepository $account, AccountTypeRepository $type)
    {

        $this->account = $account;
        $this->type = $type;
    }
    /**
     * Display a listing of the all the accounts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = $this->account->with('type')->getAll();

        return view('accounts.index', [
            'accounts' => $accounts
        ]);
    }

    /**
     * Show the form for creating a new account.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->type->getAll();

        return view('accounts.create',[
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAccountRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountRequest $request)
    {
        $opening_date = Carbon::now();

        $account = $this->account->create([
            'name' => $request->account_name,
            'account_type_id' => $request->account_type,
            'account_head' => $request->account_head,
            'description' => $request->account_description,
            'opening_balance' => $request->opening_balance,
            'opening_date' => $opening_date
        ]);

        return redirect(route('account.show', $account->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = $this->account->getById($id);

        return view('accounts.show',[
            'account' => $account
        ]);
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
