<?php

class ListNode {
    public ?string $name = null;
    public ?int $mark = null;
    public $next = null;

    public function __construct(string $name = null,int $mark = null) {
        $this->name = $name;
        $this->mark = $mark;
    }
}
class LinkedList {
    private object|null $_firstNode = null;
    private int $_totalNodes = 0;

    public function insert(string $name = null,int $mark = null): bool
    {
        $newNode = new ListNode($name,$mark);

        if ($this->_firstNode === null) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return TRUE;
    }

    public function display() {
        echo "Total book titles: " . $this->_totalNodes." "."<br>" ;
        $currentNode = $this->_firstNode;
        while ($currentNode !== null) {
            echo $currentNode->name." ".$currentNode->mark."<br>"; ;
            $currentNode = $currentNode->next;
        }
    }
}
$BookTitles = new LinkedList();
$BookTitles->insert("phi", 8);
$BookTitles->insert("thắng",7);
$BookTitles->insert("cường",7);
$BookTitles->display(); 