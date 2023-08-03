<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Http\Controllers;

use App\Http\Requests\DemoRequest;

class IndexController extends AbstractController
{
    public function index(DemoRequest $request)
    {
        $user = $request->input('user', 'Hyperf');
        $method = $request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
