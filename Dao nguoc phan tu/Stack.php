<?php

class Stack
{
public array $stack;
public $limit;

    public function __construct($limit=10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }

    public function isEmpty()
    {
        return count($this->stack)<=0;
    }

    public function push($value)
    {
        if (!$this->isFull()) {
            array_unshift($this->stack, $value);
        } else echo "Stack is Full";
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->stack);
        } else echo "Stack is Empty";
    }

    public function disPlay()
    {
        for ($i = 0; $i< count($this->stack); $i++) {
            echo $this->stack[$i].", ";
        }
    }

}