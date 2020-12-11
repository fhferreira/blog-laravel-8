<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Post;

class Index extends BaseController
{
    public function __invoke(Post $postModel)
    {
        $posts = $postModel->with('author')
            ->orderBy('created_at','desc')
            ->paginate(5);

        $title = 'Big Journal Posts';

        $header_span = 'All latest posts';

        return view('post.index', compact('title', 'posts', 'header_span'));
    }
}
