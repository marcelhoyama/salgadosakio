<?php

class contatoController extends controller{


 public function __construct(){
 	parent::__construct();

 }
    
    public function index() {
      
           
          $dados = array('erro'=> '','ok'=>'');
         
           $t=new telefone();
           $dados['telefone']=$t->fixo();
           $dados['celular']=$t->celular();
           $dados['email']=$t->email();
          
  if(isset($_POST['email']) && !empty($_POST['email'])){
              $nome= addslashes($_POST['nome']);
             $telefone= addslashes($_POST['telefone']);
            $email= addslashes($_POST['email']);
          
       $c = new cliente();
     $dados['ok']=  $c->cadastroCliente($nome, $telefone ,$email);
       
  }
   
   
    
     $this->loadTemplate('contato', $dados);
}
}