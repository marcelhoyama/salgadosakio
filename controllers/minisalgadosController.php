<?php

class minisalgadosController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
        $dados = array('erro'=>'');

       $t=new telefone();
           $dados['telefone']=$t->fixo();
           $dados['celular']=$t->celular();
           $dados['email']=$t->email();
        $this->loadTemplate('minisalgados', $dados);
    }
    
    
}
