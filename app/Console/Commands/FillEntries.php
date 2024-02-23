<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Statamic\Facades\Entry;

class FillEntries extends Command
{
    protected $signature = 'app:fill-entries {--times=10 : The number of times to run the fake method}';

    public function handle()
    {
        for ($i = 0; $i < $this->option('times'); $i++) {
            Entry::make()
                ->collection('pages')
                ->slug('test-' . $i)
                ->data([
                    'title' => 'Test #' . $i,
                    'template' => 'default',
                    'blueprint' => 'pages',
                    'myassets' => [
                        'test-image-' . ($i * 10) . '.jpg',
                        'test-image-' . ($i * 10) + 1 . '.jpg',
                        'test-image-' . ($i * 10) + 2 . '.jpg',
                        'test-image-' . ($i * 10) + 3 . '.jpg',
                        'test-image-' . ($i * 10) + 4 . '.jpg',
                        'test-image-' . ($i * 10) + 5 . '.jpg',
                        'test-image-' . ($i * 10) + 6 . '.jpg',
                        'test-image-' . ($i * 10) + 7 . '.jpg',
                        'test-image-' . ($i * 10) + 8 . '.jpg',
                        'test-image-' . ($i * 10) + 9 . '.jpg',
                    ]
                ])
                ->save();
        }
    }
}
