<?php

namespace App;

use Tempest\Console\ConsoleCommand;
use Tempest\Console\HasConsole;

final class HelloCommand
{
    use HasConsole;

    #[ConsoleCommand]
    public function world(string $name = 'stranger'): void
    {
        $this->success("Hello, {$name}!");
    }
}