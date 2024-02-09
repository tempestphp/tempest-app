<?php

namespace App;

use Tempest\Http\Get;
use function Tempest\view;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke()
    {
        return view('home.view.php');
    }
}