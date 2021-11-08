<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Collection\Queue;
use Collection\Sequence;

$queue = new Queue();

$queue->push(1);
$queue->push(2);
$queue->push(3);

echo $queue->pop() . PHP_EOL;
echo $queue->jsonSerialize() . PHP_EOL;

$sequence = new Sequence();

$sequence->insert(0, "tacos");
$sequence->insert(1, "poulpe");
$sequence->insert(1, "castor");
try {
    echo $sequence->insert(4, "mergez") . PHP_EOL;
} catch (OutOfRangeException $e) {
    echo $e->getMessage() . PHP_EOL;
}
echo $sequence->jsonSerialize() . PHP_EOL;
echo $sequence->get(1) . PHP_EOL;
try {
    echo $sequence->get(3) . PHP_EOL;
} catch (OutOfRangeException $e) {
    echo $e->getMessage() . PHP_EOL;
}
