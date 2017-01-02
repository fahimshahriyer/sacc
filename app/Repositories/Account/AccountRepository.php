<?php

namespace App\Repositories\Account;

use App\Models\Account;
use App\Repositories\BaseRepository;

class AccountRepository extends BaseRepository
{

    /**
     * @var Account
     */
    protected $model;
    /**
     * AccountRepository constructor.
     * @param Account $account
     */
    public function __construct(Account $account)
    {
        $this->model = $account;
    }
}