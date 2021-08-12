<?php

class Node{
    
    private $data;
    private $next;
    public function __construct(){
        
        $this->data = 0;
        $this->next = null;
    }
    public function setData($data):void{
        $this->data = $data;
    }
    public function getData(){
        return $this->data;
    }

    public function setNext($next):void{
        $this->next = $next;
    }

    public function getNext(){
        return $this->next;
    }

}

class Linked_List{
    private $head;
    private $length;
    public function __construct()
    {
        $this->head = null;
        $this->length = 0;
        
    }

    public function insertBackItem($data){
        
        $newNode = new Node();
        $newNode->setData($data);

        if($this->head){
            
            $currentNode = $this->head;
            while($currentNode->getNext()){
                
                $currentNode = $currentNode->getNext();
            }
            $currentNode->setNext($newNode);

        }
        else{
                $this->head = $newNode;
        }
        $this->length++;
    }


    public function insertFrontItem($data){
        if($this->head){
            $newNode = new Node();
            $newNode->setData($data);
            $currentHead = $this->head;
            $newNode->setNext($currentHead);
            $this->head = $newNode;
        }
        else{
            $newNode = new Node();
            $newNode->setData($data);
            $this->head = $newNode;
        }
            $this->length++;
        }


        public function insertAt($pos,$data){
            if($pos <= $this->length){
                $head = $this->head;
                $newNode = new Node();
                $newNode->setData($data);
                for($i=0;$i<1;$i++){
                    // echo "here";
                    $currentNext = $head->getNext();
                    $currentHead = $currentNext->getNext();
                    
                }
                $newNode->setNext($currentNext->getData());
                $currentNext->setData($newNode->getData());
                
            }
        }
    
}





$ll1 = new Linked_List();

$ll1->insertFrontItem(19);
$ll1->insertBackItem(12);
$ll1->insertBackItem(13);
$ll1->insertBackItem(14);
$ll1->insertFrontItem(15);
$ll1->insertAt(3,18);

var_dump($ll1);
?>