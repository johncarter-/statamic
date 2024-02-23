<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Statamic\Facades\Entry;

class FillAssets extends Command
{
    protected $signature = 'app:fill-assets {--times=10 : The number of times to run the fake method}';

    public function handle()
    {
        for ($i = 0; $i < $this->option('times'); $i++) {
            File::copy(public_path('cedric-fox-1tIkmgkpfNQ-unsplash.jpg'), public_path('assets/test-image-' . $i . '.jpg'));
        }
    }
}
