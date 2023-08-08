<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use SwooleTW\Hyperf\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RefreshDatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateUser()
    {
        $user = factory(User::class)->create();

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
        ]);
    }

    public function testZeroUserAfterRefresh()
    {
        $this->assertSame(0, User::count());
    }
}
