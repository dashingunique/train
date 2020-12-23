<?php

namespace App\Admin\Repositories;

use App\Models\LoadingLog as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class LoadingLog extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
