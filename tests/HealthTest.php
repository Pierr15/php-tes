<?php

declare(strict_types=1);

namespace Tests;

use App\Health;
use PHPUnit\Framework\TestCase;

final class HealthTest extends TestCase
{
    public function testStatusContainsExpectedFields(): void
    {
        $status = Health::status();

        self::assertSame('ok', $status['status']);
        self::assertSame(PHP_VERSION, $status['php_version']);
        self::assertNotFalse(strtotime($status['timestamp']));
    }
}
