<?php

namespace App;

final readonly class HomeController
{
    public function __invoke()
    {
        return view('home.view.php');
    }
}