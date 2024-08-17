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

use Hyperf\Context\RequestContext;
use Hyperf\HttpMessage\Exception\HttpException;
use Hyperf\Validation\ValidationException;
use Psr\Http\Message\ResponseInterface;
use SwooleTW\Hyperf\Foundation\Exceptions\Handlers\HttpExceptionHandler;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Throwable;

class ApiExceptionHandler extends HttpExceptionHandler
{
    protected array $statusCodeMapping = [
        \Hyperf\Validation\UnauthorizedException::class => 403,
        \Hyperf\Validation\ValidationException::class => 422,
    ];

    public function handle(Throwable $throwable, ResponseInterface $response): ResponseInterface
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

        $this->stopPropagation();

        return parent::handle($throwable, $response)
            ->withStatus($code)
            ->withHeader('Content-Type', 'application/json')
            ->withContent(json_encode($result));
    }

    public function isValid(Throwable $throwable): bool
    {
        return str_starts_with(
            RequestContext::get()->getUri()->getPath(),
            '/api/'
        );
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
        if ($e instanceof ValidationException) {
            return $e->validator->errors()->first();
        }

        $message = $message = $e->getMessage() ?? null;
        if (! $message && $previous = $e->getPrevious()) {
            $message = $previous->getMessage() ?? null;
        }

        return $message ?: 'No Message';
    }
}
