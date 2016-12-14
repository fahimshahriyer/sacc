<?php

namespace App\Repositories\Fee;

use App\Models\Fee;
use App\Repositories\BaseRepository;

class FeeRepository extends BaseRepository implements FeeRepositoryInterface
{
    /**
     * @var Fee
     */
    protected $model;
    /**
     * FeeRepository constructor.
     * @param Fee $fee
     */
    public function __construct(Fee $fee)
    {
        $this->model = $fee;
    }
}