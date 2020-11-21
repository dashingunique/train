<?php

namespace App\Admin\Repositories;

use App\Models\Lot as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Lot extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
