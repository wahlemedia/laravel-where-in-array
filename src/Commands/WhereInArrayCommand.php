<?php

namespace Wahlemedia\WhereInArray\Commands;

use Illuminate\Console\Command;

class WhereInArrayCommand extends Command
{
    public $signature = 'laravel-where-in-array';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
