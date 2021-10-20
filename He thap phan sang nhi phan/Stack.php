<?php

class Stack
{
    public array $stack;
    public $limit;

    /**
     * @param $stack
     * @param $limit
     */
    public function __construct($limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (!$this->isFull()) {
            array_unshift($this->stack, $data);
        } else {
            echo "Stack is full";
        }
    }


    public function pop()
    {
        if ($this->iSEmpty()) {
            echo "Stack is empty!!";
        } else {
            return array_shift($this->stack);
        }
    }


    public function iSEmpty()
    {
        return count($this->stack) <= 0;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }

}