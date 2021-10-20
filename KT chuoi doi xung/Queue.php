<?php

class Queue
{
    public $queue;
    public $limit;

    /**
     * @param $stack
     * @param $limit
     */
    public function __construct($limit=10)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enqueue($data)
    {
        array_push($this->queue, $data);
    }


    public function dequeue()
    {
        if ($this->iSEmpty()) {
            echo "Stack is empty!!";
        } else {
            return array_shift($this->queue);
        }
    }

    public function iSEmpty()
    {
        return count($this->queue)<=0;
    }

    public function isFull()
    {
        return count($this->queue) >= $this->limit;
    }

}