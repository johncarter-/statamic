<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Statamic\Facades\Entry;

class EmptyEntries extends Command
{
    protected $signature = 'app:empty-entries';

    public function handle()
    {
        File::copy('content/collections/pages/home.md', 'home.md');

        File::cleanDirectory('content/collections/pages');

        File::copy('home.md', 'content/collections/pages/home.md');

        File::delete('home.md');
    }
}
