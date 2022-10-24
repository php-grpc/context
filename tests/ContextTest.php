<?php

declare(strict_types=1);

namespace PhpGrpc\Context\Tests;

use PhpGrpc\Context\Context;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    public function test(): void
    {
        $ctx = new Context();

        self::assertFalse($ctx->has('key1'));
        self::assertNull($ctx->getValue('key1'));
        self::assertEquals(1, $ctx->getValue('key1', 1));
        self::assertEmpty($ctx->getValues());

        $val = 'test';
        $ctx->setValue('key2', $val);

        self::assertTrue($ctx->has('key2'));
        self::assertEquals($val, $ctx->getValue('key2'));
        self::assertEquals(
            [
                'key2' => $val,
            ],
            $ctx->getValues(),
        );
    }
}
