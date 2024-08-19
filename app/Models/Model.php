<?php

declare(strict_types=1);

namespace App\Models;

use SwooleTW\Hyperf\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    protected ?string $connection = null;
}
