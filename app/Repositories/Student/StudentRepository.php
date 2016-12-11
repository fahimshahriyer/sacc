<?php

namespace App\Repositories\Student;


use App\Models\Student;
use App\Repositories\BaseRepository;

class StudentRepository extends BaseRepository implements StudentRepositoryInterface
{
    protected $model;

    /**
     * StudentRepository constructor.
     * @param Student $student
     * @internal param Student $model
     */
    public function __construct(Student $student)
    {
        $this->model = $student;
    }
}