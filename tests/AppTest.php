<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class AppTest extends TestCase
{
    public function testTestAreWorking(): void
    {
        static::assertSame(2, 1 + 1);
    }
}
