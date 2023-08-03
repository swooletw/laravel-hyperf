<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Hyperf\Validation\Middleware\ValidationMiddleware as HyperfValidationMiddleware;
use Hyperf\Validation\UnauthorizedException;
use Psr\Http\Message\ResponseInterface;

class ValidationMiddleware extends HyperfValidationMiddleware
{
    /**
     * @param UnauthorizedException $exception Keep this argument here even this argument is unused in the method,
     *                                         maybe the user need the details of exception when rewrite this method
     */
    protected function handleUnauthorizedException(UnauthorizedException $exception): ResponseInterface
    {
        throw $exception;
    }
}
