<?php

namespace Dcat\Admin\Extension\WebsiteSettings\Repositories;

use Dcat\Admin\Extension\WebsiteSettings\Model\Setting as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Setting extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
