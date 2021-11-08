<?php

namespace Collection;

use OutOfRangeException;

class Sequence implements Collection
{
    private array $values = [];

    public function clear(): void
    {
        $values = [];
    }

    public function isEmpty(): bool
    {
        return count($this->values) === 0;
    }

    public function count(): int
    {
        return count($this->values);
    }

    public function jsonSerialize(): string
    {
        return json_encode($this->values);
    }

    public function get(int $index): mixed
    {
        if ($index < 0 || $index >= $this->count()) {
            throw new OutOfRangeException("Index is out of range");
        }
        return $this->values[$index];
    }

    public function insert(int $index, mixed $value): void
    {
        if ($index < 0 || $index > $this->count()) {
            throw new OutOfRangeException("Inserted index is out of range");
        }
        array_splice($this->values, $index, 0, $value);
    }
}
