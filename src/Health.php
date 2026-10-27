<?php

declare(strict_types=1);

namespace App;

final class Health
{
    /**
     * Return basic application health information.
     *
     * @return array{status: string, php_version: string, timestamp: string}
     */
    public static function status(): array
    {
        return [
            'status' => 'ok',
            'php_version' => PHP_VERSION,
            'timestamp' => gmdate('c'),
        ];
    }
}
