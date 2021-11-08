<?php

namespace Collection;

use Countable;

abstract class Collection implements Countable, JsonSerializable
{
    abstract public function clear(): void;

    abstract public function isEmpty(): bool;
}
