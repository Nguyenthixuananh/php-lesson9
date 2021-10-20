<?php
include_once "Stack.php";
 $arrStack = new Stack();
 $arrStack->push(9);
 $arrStack->push(8);
 $arrStack->push(7);
 $arrStack->push(6);
 $arrStack->push(5);
 $arrStack->push(4);
 $arrStack->pop();
 $arrStack->pop();
 $arrStack->pop();
 $arrStack->disPlay();