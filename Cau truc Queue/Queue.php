<?php
include_once "Node.php";
class Queue
{
    public $queue;
    public $limit;

    public function __construct($limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }


    public function isEmpty()
    {
        return is_null($this->front);
    }

//    Them 1 value vao phan duoi cua Queue
    public function enqueue($value)
    {
//        $oldBack = $this->back;
        $node = new Node();
        $this->back =$node;
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $this->back->next = $this->back;
        }
    }

//    Lay ra phan dau cua Queue
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $node = new Node();
        $this->front = $node;
        $this->front = $this->front->next;
        return $this->front->next;
    }

}