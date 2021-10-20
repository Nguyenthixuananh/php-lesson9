<?php

include_once "Node.php";

class LinkedList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $node = new Node($data);
        $node->next= $this->firstNode;
        $this->firstNode =$node;
        if (is_null($this->lastNode)) {
            $this->lastNode= $node;
        }
        $this->count++;
    }

    public function insertLast($data)
    {
        $node = new Node($data);
        $this->lastNode->next = $node;
        $this->lastNode = $node;
        $this->lastNode->next = null;


    }
}