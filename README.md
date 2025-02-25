> **Warning**
>
> This repository has been transfered to [laravel-hyperf/laravel-hyperf](https://github.com/laravel-hyperf/laravel-hyperf).
>
> Please go to the new repository for latest update.

<p align="center"><a href="https://laravel-hyperf.com" target="_blank"><img src="https://laravel-hyperf.com/logo.svg" width="400"></a></p>

<p align="center">
<a href="https://github.com/swooletw/hyperf-packages/actions"><img src="https://github.com/swooletw/hyperf-packages/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/swooletw/hyperf-packages"><img src="https://img.shields.io/packagist/dt/swooletw/hyperf-packages" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/swooletw/hyperf-packages"><img src="https://img.shields.io/packagist/v/swooletw/hyperf-packages" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/swooletw/hyperf-packages"><img src="https://img.shields.io/packagist/l/swooletw/hyperf-packages" alt="License"></a>
</p>

## Introduction

**Laravel Hyperf** is a Laravel-style PHP framework with native coroutine support for ultra-high performance.

Built on Swoole and [Hyperf](https://hyperf.io) framework, it ports many Laravel components while maintaining familiar usage patterns, making it instantly accessible to Laravel developers. The framework combines the elegant, expressive development experience of Laravel with the powerful performance benefits of coroutine-based programming. If you're a Laravel developer, you'll feel right at home with this framework, requiring minimal additional learning.

Laravel Hyperf is an ideal choice for building microservices, API gateways, and high-concurrency applications where traditional PHP frameworks might struggle to perform.

## Why Laravel Hyperf?

While Laravel Octane is impressive and significantly improves your Laravel application's speed and performance, it's important to consider the nature of modern web applications. In most cases, the majority of latency comes from I/O operations, such as reading files, querying databases and making API requests.

If your application relies heavily on slow I/O operations, you may still encounter performance bottlenecks. Consider this scenario:

Imagine building an AI-powered chatbot where each conversation API takes 3-5 seconds to respond. If you have 10 workers in Laravel Octane and receive 10 concurrent requests, all workers would be occupied until these requests complete.

> You can see [benchmark comparison](https://laravel-hyperf.com/docs/introduction.html#benchmark) between Laravel Octane and Laravel Hyperf

In such cases, even with Laravel Octane's improvements, your application's ability to handle concurrent requests is still limited by the duration of these I/O operations. Laravel Hyperf addresses this issue by leveraging coroutines, allowing for efficient handling of concurrent I/O operations without blocking workers. This approach can significantly improve the performance and concurrency of applications with heavy I/O requirements.

For I/O-intensive scenarios, Laravel Octane may not significantly boost performance. Moreover, and it's unlikely that Laravel Octane will support coroutines in the near future (see [this issue](https://github.com/laravel/octane/issues/765)), given that only Swoole runtime currently supports this feature and considering backward compatibility with the framework and third-party packages.

> Even if Laravel Octane supported coroutines, these coroutines would still be limited to a single request, with workers remaining blocked until all I/O operations within that request completed. That means your Laravel application can't get better QPS results in this kind of scenario.

> See [this pull request](https://github.com/swoole/swoole-src/pull/4330) for more information.

**Laravel Hyperf** aims to help Laravel artisans enjoy the high performance of Hyperf while maintaining familiar Laravel development practices. It's compatible with Hyperf packages, ensuring developers can share the same ecosystem and community. We encourage developers to contribute to the Hyperf project, benefiting both Hyperf and **Laravel Hyperf** simultaneously.

## Documentation

[https://laravel-hyperf.com/docs](https://laravel-hyperf.com/docs)

Laravel Hyperf provides comprehensive and user-friendly documentation that allows you to quickly get started. From this documentation, you can learn how to use various components in Laravel Hyperf and understand the differences between this framework and Laravel.

> Most of the content in this documentation is referenced from the official Laravel documentation. We appreciate the Laravel community's contributions.

## License

The Laravel Hyperf framework is open-sourced software licensed under the [MIT](https://opensource.org/licenses/MIT) license.
