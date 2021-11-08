<?php

namespace Collection;

interface JsonSerializable
{
    public function jsonSerialize(): string;
}
