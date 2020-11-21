<?php

namespace App\Admin\Repositories;

use App\Models\Reason as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Reason extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
