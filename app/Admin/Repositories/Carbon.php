<?php

namespace App\Admin\Repositories;

use App\Models\Carbon as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Carbon extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
