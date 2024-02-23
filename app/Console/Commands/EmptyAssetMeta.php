<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Statamic\Facades\Entry;

class EmptyAssetMeta extends Command
{
    protected $signature = 'app:empty-asset-meta';

    public function handle()
    {
        File::cleanDirectory(public_path('assets/.meta'));
    }
}
