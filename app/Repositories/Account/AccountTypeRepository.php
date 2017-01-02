<?php

namespace App\Repositories\Account;

use App\Models\AccountType;
use App\Repositories\BaseRepository;

class AccountTypeRepository extends BaseRepository
{
    /**
     * @var AccountType
     */
    protected $model;
    /**
     * AccountCategoryRepository constructor.
     * @param AccountType $category
     */
    public function __construct(AccountType $category)
    {
        $this->model = $category;
    }
}