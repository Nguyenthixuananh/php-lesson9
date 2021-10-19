<?php

class Stack
{
    public $stack;
    public $limit;

    /**
     * @param $stack
     * @param $limit
     */
    public function __construct($limit)
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

//    Hien thi ptu tren cung
    public function top()
    {
        if (!$this->iSEmpty()) {
            return $this->stack[0];
        }else {
            return "Có gì đâu mà soi";
        }
    }

    public function iSEmpty()
    {
        return count($this->stack)<=0;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }


}