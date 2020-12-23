<?php

namespace App\Admin\Repositories;

use App\Models\Loading as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Loading extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
