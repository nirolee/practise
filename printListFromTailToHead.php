<?php

class ListNode{
    public $next = NULL;
    function __construct($x=''){
        $this->val = $x;
    }
    
 
}
class text{
        public function main(){
        $head = new ListNode();
        $sixseven = new ListNode(67);
        $head->next = $sixseven;
        $zero = new ListNode(0);
        $sixseven->next = $zero; 
        $this->show($head);
    }
    static  public  function show($head){
        $cur=$head;
        while ($cur->next!==NUll){
           echo 'Êý×Ö:' .$cur->val."<br/>";
           $cur = $cur->next;
        }
    }
}
$text = new text();
$text->main();

