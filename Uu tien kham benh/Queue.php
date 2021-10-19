<?php
include_once "Patient.php";

class Queue
{
    const VIP1 =1;
    const VIP2 =4;
    const VIP3 =5;
    const NORMAL = 6;

public array $queueList;
public int $size;

    public function __construct($size)
    {
        $this->queueList = [self::VIP1=>[], self::VIP2=>[], self::VIP3=>[], self::NORMAL=>[]];
        $this->size = $size;
    }

    public function isEmpty()
    {
        return count($this->queueList)<=0;
    }

    public function isFull()
    {
        return count($this->queueList) >= $this->size;
    }

    public function enqueue($name,$code)
    {
        if ($this->isFull()) {
            echo "This queue is full";
        } else {
            $patient = new Patient($name, $code);
            array_push($this->queueList[$code], $patient);
            $this->size++;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $dequeueItem = [];
        if (!empty($this->queueList[self::VIP1])){
            $dequeueItem = array_shift($this->queueList[self::VIP1]);
        } else if (!empty($this->queueList[self::VIP2])) {
            $dequeueItem = array_shift($this->queueList[self::VIP2]);
        } else if (!empty($this->queueList[self::VIP3])) {
            $dequeueItem = array_shift($this->queueList[self::VIP3]);
        } else if (!empty($this->queueList[self::NORMAL])) {
            $dequeueItem = array_shift($this->queueList[self::NORMAL]);
        } $this->size--;
        return $dequeueItem;
    }



}