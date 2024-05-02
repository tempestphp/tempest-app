<?php

declare(strict_types=1);

namespace App;

use Tempest\Http\Get;

use function Tempest\view;

use Tempest\View\View;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        return view('home.view.php');
    }
}
