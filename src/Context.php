<?php

declare(strict_types=1);

namespace PhpGrpc\Context;

class Context implements ContextInterface
{
    public function __construct(private array $values = [])
    {
    }

    public function setValue(string $key, mixed $value): self
    {
        $this->values[$key] = $value;

        return $this;
    }

    public function getValue(string $key, mixed $default = null): mixed
    {
        if ($this->has($key)) {
            return $this->values[$key];
        }

        return $default;
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, $this->values);
    }
}
