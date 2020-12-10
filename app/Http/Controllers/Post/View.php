<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Post;

class View extends BaseController
{
    public function __invoke($id, Post $postModel)
    {
        $post = $postModel->findOrFail($id);

        $title = $post->title;

        return view('post.view', compact('title', 'post'));
    }
}
