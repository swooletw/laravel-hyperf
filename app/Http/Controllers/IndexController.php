<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Hyperf\HttpServer\Request;

class IndexController extends AbstractController
{
    public function index(Request $request)
    {
        $user = $request->input('user', 'Hyperf');
        $method = $request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
