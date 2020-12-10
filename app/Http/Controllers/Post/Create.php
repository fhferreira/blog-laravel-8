<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller as BaseController;

class Create extends BaseController
{
    public function __invoke()
    {
        $title = "Create Post";
        return view('create');
    }
}
