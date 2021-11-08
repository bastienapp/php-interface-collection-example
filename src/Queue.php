<?php

namespace Collection;

class Queue extends Collection
{
    private array $queue = [];

    public function clear(): void
    {
        $queue = [];
    }

    public function isEmpty(): bool
    {
        return count($this->queue) === 0;
    }

    public function count(): int
    {
        return count($this->queue);
    }

    public function jsonSerialize(): string
    {
        return json_encode($this->queue);
    }

    public function pop(): mixed
    {
        $first = array_splice($this->queue, 0, 1);
        return $first[0];
    }

    public function push(mixed $item): void
    {
        $this->queue[] = $item;
    }
}
