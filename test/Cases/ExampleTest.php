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
namespace HyperfTest\Cases;

use HyperfTest\HttpTestCase;
use Hyperf\DbConnection\Db;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends HttpTestCase
{
    public function testExample()
    {
        Db::select('SELECT * FROM users;');

        $this->assertTrue(true);
        $this->assertTrue(is_array($this->get('/')));
    }
}
