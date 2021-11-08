<?php

namespace Collection;

use Countable;

interface Collection extends Countable, JsonSerializable
{
    public function clear(): void;

    public function isEmpty(): bool;
}
