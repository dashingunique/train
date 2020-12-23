<?php

namespace App\Admin\Repositories;

use App\Models\Employee as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Employee extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
