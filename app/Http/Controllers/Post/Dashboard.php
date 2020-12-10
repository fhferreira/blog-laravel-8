<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Post;

class Dashboard extends BaseController
{
    public function __invoke(Post $postModel)
    {
        return view('dashboard');
    }
}
