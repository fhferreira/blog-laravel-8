<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\User;
use App\Services\Post\Contracts\ImportInterface;
use App\Services\Post\Contracts\CreateInterface;

class ImportService implements ImportInterface
{
    private $createService;

    private $url = 'https://sq1-api-test.herokuapp.com/posts';

    public function __construct(CreateInterface $createService)
    {
        $this->createService = $createService;
    }

    /**
     * @param $attributes array
     *
     * @return mixed
     */
    public function import()
    {
        //do not need curl/guzzle here.
        $response = json_decode(file_get_contents($this->url));
        $posts = $response->data;

        foreach ($posts as $post) {
            $post->author_id = User::where("name", "Admin")->first()->id;
            $this->createService->create((array) $post);
        }
    }
}
