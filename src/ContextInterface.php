<?php

declare(strict_types=1);

namespace PhpGrpc\Context;

interface ContextInterface
{
    public function setValue(string $key, mixed $value): self;

    public function getValue(string $key, mixed $default = null): mixed;

    public function getValues(): array;

    public function has(string $key): bool;
}
