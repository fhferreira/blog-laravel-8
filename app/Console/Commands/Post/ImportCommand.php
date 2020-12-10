<?php

namespace App\Console\Commands\Post;

use App\Services\Post\Contracts\ImportInterface;
use Illuminate\Console\Command;

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to import posts from https://sq1-api-test.herokuapp.com/posts';

    private $importService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ImportInterface $importService)
    {
        $this->importService = $importService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->importService->import();
    }
}
