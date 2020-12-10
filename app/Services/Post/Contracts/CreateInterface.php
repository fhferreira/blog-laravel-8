<?php

namespace App\Services\Post\Contracts;

interface CreateInterface
{
    /**
     * @param $attributes array
     *
     * @return mixed
     */
    public function create($attributes);
}
