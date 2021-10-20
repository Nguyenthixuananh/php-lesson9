<?php
include_once "Queue.php";
$myBooks = new Queue();

$myBooks->enqueue('Tony buoi sang');
$myBooks->enqueue('Nha gia kim');
$myBooks->enqueue('De men phieu luu ky');
$myBooks->enqueue('Doi ngan dung ngu dai');
$myBooks->enqueue('Hoang tu be');
$myBooks->dequeue();

echo "<pre>";
print_r($myBooks);