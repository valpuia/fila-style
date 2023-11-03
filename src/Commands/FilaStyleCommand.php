<?php

namespace Valpuia\FilaStyle\Commands;

use Illuminate\Console\Command;

class FilaStyleCommand extends Command
{
    public $signature = 'fila-style';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
