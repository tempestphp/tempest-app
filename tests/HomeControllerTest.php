<?php

declare(strict_types=1);

namespace Tests;

use Tempest\Framework\Testing\IntegrationTest;

class HomeControllerTest extends IntegrationTest
{
    protected string $root = __DIR__ . '/../';

    public function test_index(): void
    {
        $this->http
            ->get('/')
            ->assertOk()
            ->assertSee('Tempest');
    }
}
