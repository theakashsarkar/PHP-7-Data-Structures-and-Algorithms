<?php
class ListNode{
    public $data = null;
    public $next = null;
    
    public function __construct(string $data = null){
        $this->data = $data;
    }

}
class LinkedList{
    private $_firstNode = NULL;
    private $_totalNode = 0;
    
    public function insert(string $data = null){
       $newNode = new ListNode($data);
       if($this->_firstNode === null){
           $this->_firstNode = &$newNode;
       }else{
           $currentNode = $this->_firstNode;
           while($currentNode->next !== null){
               $currentNode =  $currentNode->next;
           }
           $currentNode->next = $newNode;
       }
       $this->_totalNode++;
       return true;
    }
    public function display(){
        echo "Total Book title:".$this->_totalNode."\n";
        $currentNode = $this->_firstNode;
        while($currentNode !== NULL){
             echo $currentNode->data."\n";
             $currentNode = $currentNode->next;
        }
    }
}
$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm"); 
$BookTitles->insert("Introduction to PHP and Data structures"); 
$BookTitles->insert("Programming Intelligence"); 
$BookTitles->display();