<?php

class cacheController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
       
       echo "controler";
        exit();
       $c = new cache();
       $dados= $c->cacheSave();
        
     $this->loadTemplate('contato', $dados);
}
}