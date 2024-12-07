<?php

declare(strict_types=1);

namespace Tests;

class HomeControllerTest extends IntegrationTestCase
{
    public function test_index(): void
    {
        $this->http
            ->get('/')
            ->assertOk()
            ->assertSee('Tempest');
    }
}
