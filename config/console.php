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
use Hyperf\Command\Console;
use SwooleTW\Hyperf\Support\Facades\Schedule;

Console::command('hello', function () {
    $this->comment('Hello, Hyperf!');
})->describe('This a closure command demo.');

// Schedule::command('demo:hi', ['--name' => 'Hyperf'])->everyFiveSeconds();
