<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use SwooleTW\Hyperf\Http\Contracts\Request;

class IndexController extends AbstractController
{
    public function index(Request $request, ?string $name = null): array
    {
        $user = $request->input('user', 'Hyperf');
        $method = $request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
