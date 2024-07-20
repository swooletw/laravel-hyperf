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
namespace App\Exceptions\Handlers;

use Hyperf\ExceptionHandler\ExceptionHandler;
use Hyperf\HttpMessage\Exception\HttpException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Throwable;

class AppExceptionHandler extends ExceptionHandler
{
    protected array $statusCodeMapping = [
        \Hyperf\Validation\UnauthorizedException::class => 403,
        \Hyperf\Validation\ValidationException::class => 422,
    ];

    public function handle(Throwable $throwable, ResponseInterface $response)
    {
        $result = [
            'code' => $code = $this->getStatusCode($throwable),
            'exception' => get_class($throwable),
            'message' => $this->getMessage($throwable),
        ];

        if (environment()->isDebug() && ! environment()->isTesting()) {
            $e = FlattenException::createFromThrowable($throwable);
            $result['trace'] = $e->getTrace();
        }

        // $this->stopPropagation();

        return $response
            ->withStatus($code)
            ->withHeader('Content-Type', 'application/json')
            ->withContent(json_encode($result));
    }

    public function isValid(Throwable $throwable): bool
    {
        return true;
    }

    protected function getStatusCode(Throwable $e): int
    {
        if ($statusCode = $this->statusCodeMapping[get_class($e)] ?? null) {
            return $statusCode;
        }

        return $e instanceof HttpException ? $e->getStatusCode() : 400;
    }

    protected function getMessage(Throwable $e): string
    {
        $message = $message = $e->getMessage() ?? null;
        if (! $message && $previous = $e->getPrevious()) {
            $message = $previous->getMessage() ?? null;
        }

        return $message ?: 'No Message';
    }
}
