<?php

namespace App\Admin\Repositories;

use App\Models\Subway as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Subway extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
