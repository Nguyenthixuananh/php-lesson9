<?php
include_once "Patient.php";

class Queue {
    private $firstNode;
    private $lastNode;

    function __construct() {
        $this->firstNode= null;
        $this->lastNod =null;
    }
    function insertFirst($data) {
        $data->next = $this->firstNode;
        $this->firstNode= $data;

        if (is_null($this->lastNode)) {
            $this->lastNode = $data;
        }
    }
    function insertLast($data) {
        if (!is_null($this->firstNode)) {
            $this->lastNode->next = $data;
            $data->next = null;
            $this->lastNode =$data;
        }
    }
    public function addPatient($patient)
    {
        $current = $this->firstNode;
        if ($this->firstNode == null ) {
            $this->insertFirst($patient);
        }
        while (!is_null($current)) {
            if (null == $current->next ) {
                $this->insertLast($patient);
                break;

            }
            if ($patient->code < $current->next->code) {
                $patient->next = $current->next;
                $current->next = $patient;
                break;
            }
            $current = $current->next;
        }
    }
    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    public function dequeue()
    {
        $data = $this->firstNode->readNode();
        $this->firstNode = $this->firstNode->next;
        return $data;
    }
}