<?php

declare(strict_types=1);

use Hyperf\Context\ApplicationContext;
use Hyperf\Database\Model\Factory;

/**
 * @return FactoryBuilder|null
 * @throws TypeError
 * @throws NotFoundExceptionInterface
 * @throws ContainerExceptionInterface
 */
function factory(string $class)
{
    $container = ApplicationContext::getContainer();

    if (is_null($container)) {
        return null;
    }

    $factory = $container->get(Factory::class);
    $arguments = func_get_args();

    if (isset($arguments[1]) && is_string($arguments[1])) {
        return $factory->of($arguments[0], $arguments[1])->times($arguments[2] ?? null);
    }

    if (isset($arguments[1])) {
        return $factory->of($arguments[0])->times($arguments[1]);
    }

    return $factory->of($arguments[0]);
}
