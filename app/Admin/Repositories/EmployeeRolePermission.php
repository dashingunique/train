<?php

namespace App\Admin\Repositories;

use App\Models\EmployeeRolePermission as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class EmployeeRolePermission extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
