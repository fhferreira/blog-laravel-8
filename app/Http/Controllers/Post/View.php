<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Post;
use Cache;

class View extends BaseController
{
    private $postModel;
    public function __construct(Post $postModel)
    {
        $this->postModel = $postModel;
    }

    public function __invoke($id)
    {
        $post = $this->postModel->with('author')->findOrFail($id);

        $title = $post->title;

        return view('post.view', compact('title', 'post'));
    }
}
