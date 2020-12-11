<?php

namespace App\Jobs\Post;

use App\Services\Post\Contracts\ImportInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportPosts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $importService;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ImportInterface $importService)
    {
        $this->importService = $importService;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->importService->import();
    }
}
