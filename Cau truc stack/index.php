<?php
include_once "Stack.php";
 $myBooks = new Stack(6);

 $myBooks->push('Tony buoi sang');
 $myBooks->push('Nha gia kim');
 $myBooks->push('De men phieu luu ky');
 $myBooks->push('Doi ngan dung ngu dai');
 $myBooks->push('Hoang tu be');
 $myBooks->pop();

 echo "<pre>";
 print_r($myBooks);