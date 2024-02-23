<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Statamic\Facades\Entry;

class EmptyAssets extends Command
{
    protected $signature = 'app:empty-assets';

    public function handle()
    {
        File::cleanDirectory(public_path('assets'));
    }
}
