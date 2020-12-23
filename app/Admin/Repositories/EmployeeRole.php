<?php

namespace App\Admin\Repositories;

use App\Models\EmployeeRole as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class EmployeeRole extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
