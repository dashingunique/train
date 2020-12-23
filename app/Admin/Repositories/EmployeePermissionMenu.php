<?php

namespace App\Admin\Repositories;

use App\Models\EmployeePermissionMenu as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class EmployeePermissionMenu extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
