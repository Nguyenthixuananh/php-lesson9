<?php
include_once "Stack.php";
include_once "Queue.php";

function check($str) {
    $stack = new Stack();
    $queue = new Queue();

    for ($i=0; $i< strlen($str); $i++) {
        $stack->push(substr($str, $i, 1));
        $queue->enqueue(substr($str, $i, 1));
    }
    while (!$queue->iSEmpty()) {
        if ($stack->pop() != $queue->dequeue()) {
            return "Asymmetrical String(KDX)";
        } else return "Symmetrical String(DX)";
    }
}

$test1 = "toilaxuananhhnanauxaliot";
$test2 = "123456789";
$test3 = "9876789";

echo check($test1);
echo "<br/>";

echo check($test2);
echo "<br/>";

echo check($test3);
echo "<br/>";