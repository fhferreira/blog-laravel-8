<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Services\Post\Contracts\CreateInterface;

class CreateService implements CreateInterface
{
    protected $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    /**
     * @param $attributes array
     *
     * @return mixed
     */
    public function create($attributes)
    {
        return $this->model->create($attributes);
    }
}
