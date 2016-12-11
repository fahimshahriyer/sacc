<?php

namespace App\Repositories\Payplan;

use App\Models\Payplan;
use App\Repositories\BaseRepository;

class PayplanRepository extends BaseRepository implements PayplanRepositoryInterface 
{

    protected $model;

    /**
     * PayplanRepository constructor.
     * @param Payplan $payplan
     * @internal param Payplan $model
     */
    public function __construct(Payplan $payplan)
    {
        $this->model = $payplan;
    }
}