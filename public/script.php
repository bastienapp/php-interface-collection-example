<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Collection\Queue;
use Collection\Vector;

$queue = new Queue();

$queue->push(1);
$queue->push(2);
$queue->push(3);

echo $queue->pop() . PHP_EOL;
echo $queue->jsonSerialize() . PHP_EOL;

$vector = new Vector();

$vector->insert(0, "tacos");
$vector->insert(1, "poulpe");
$vector->insert(1, "castor");
try {
    echo $vector->insert(4, "mergez") . PHP_EOL;
} catch (OutOfRangeException $e) {
    echo $e->getMessage() . PHP_EOL;
}
echo $vector->jsonSerialize() . PHP_EOL;
echo $vector->get(1) . PHP_EOL;
try {
    echo $vector->get(3) . PHP_EOL;
} catch (OutOfRangeException $e) {
    echo $e->getMessage() . PHP_EOL;
}
