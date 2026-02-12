<?php

namespace App;

use Tempest\Router\Get;
use Tempest\View\View;
use function Tempest\View\view;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        return view('./home.view.php');
    }
}
