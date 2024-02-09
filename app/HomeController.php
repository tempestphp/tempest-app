<?php

namespace App;

use Tempest\Http\Get;
use Tempest\Interface\View;
use function Tempest\view;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        return view('home.view.php');
    }
}