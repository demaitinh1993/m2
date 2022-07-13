<?php
class ListNode {
    public $next = null;
    public ?string $name= null;
    public ?int $mark= null;


    public function __construct($name=null, $mark=null) {
        $this->name = $name;
        $this->mark = $mark;
    }
}
class LinkedList
{
    public int $count=0;
    public int $count_fail=0;
    public int $count_maxscore=0;
    public int $count_name=0;
    public object|null $firstNode=null;
    public object|null $lastNode=null;

    public function insertFirst($name=null,$mark=null)
    {
        $newNode= new ListNode($name,$mark);
        
            if($this->firstNode===null)
            {
                $this->firstNode = &$newNode;
            }else {
                $currentFirstNode = $this->firstNode;
                $this->firstNode = &$newNode;
                $newNode->next= $currentFirstNode;
            }
            $this->count++;
            return true;
        
    }
    public function insertLast($name = null,$mark = null)
    {
        $newNode = new ListNode($name,$mark);

        if ($this->firstNode === null) {
            $this->firstNode = &$newNode;
        } else {
            $currentNode = $this->firstNode;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->count++;
        return true;
    }
    public function showList()
    {
        echo "total students: ".$this->count."<br>";
        $currentNode=$this->firstNode;
        while ($currentNode !==null)
        {
            echo "Name: ".$currentNode->name."  -- mark: ".$currentNode->mark."<br>";
            $currentNode=$currentNode->next;
        }

    }
    public function totalStudentsFail()
    {
        $currentNode= $this->firstNode;
        while($currentNode!==null)
        {
            if($currentNode->mark<5){
                echo "Name: ".$currentNode->name." -- mark: ".$currentNode->mark."<br>";
                $this->count_fail++;
            }
            $currentNode=$currentNode->next;
        }
        echo "total students fail: ".$this->count_fail."<br>";

    }
    public function listStudentMaxScore()
    {
        $currentNode=$this->firstNode;
        while ($currentNode !==null)
        {
            if($currentNode->mark>=8)
            {
                echo "Name: ".$currentNode->name." -- mark: ".$currentNode->mark."<br>";
                $this->count_maxscore++;
            }
            $currentNode=$currentNode->next;
        }
        echo "total students pass: ".$this->count_maxscore."<br>";
    }
    public function findByName($name)
    {
        $currentNode = $this->firstNode;
        while ($currentNode !== null)
        {
            if($currentNode->name == $name)
            {
                echo "Name: ".$currentNode->name." -- mark: ".$currentNode->mark."<br>";
                $this->count_name++;
            }
            $currentNode=$currentNode->next;
        }
        echo "total students have name ".$name." are: ".$this->count_name."<br>";

    }
    public function size()
    {

    }
}
$st1=new LinkedList;
////////////add students
$st1->insertFirst("toan", 8);
$st1->insertFirst("thang", 7);
$st1->insertFirst("thang", 6);
$st1->insertLast("thang", 4);
$st1->insertLast("tâm", 3);
$st1->insertLast("linh", 9);
$st1->insertLast("việt", 10);
///////seach by name
echo $st1->findByName("thang");
// echo "total students'name ".$name." là: ".$st1->count_name."<br>";
echo "-----------------------<br>";
/////////display
$st1->showList();
echo "-----------------------<br>";
////////students fail
$st1->totalStudentsFail();
echo "-----------------------<br>";
////////students pass
$st1->listStudentMaxScore();

?>