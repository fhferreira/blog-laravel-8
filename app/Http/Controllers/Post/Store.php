<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\StorePostRequest;
use App\Services\Post\Contracts\CreateInterface;

class Store extends BaseController
{
    private $service;

    public function __construct(CreateInterface $service)
    {
        $this->service = $service;
    }

    public function __invoke(StorePostRequest $request)
    {
        $attributes = $request->all();
        $attributes->merge(['author_id' => auth()->user()->id]);

        $post = $this->service->create($attributes);

        return redirect(sprintf("/post/%d", $post->id));
    }
}
