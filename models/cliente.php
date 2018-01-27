<?php


class cliente extends model {
    
    public function cadastroCliente ($nome, $email, $telefone){
        
       $sql = "INSERT INTO clientes SET nome='".$nome."', email='".$email."',telefone='".$telefone."' ";
       
       $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();
       
          if ($sql->rowCount() > 0) {
            
              return "Cadastrado com sucesso!";
                        
          }else{
              return "Preencha todos os campos!";
          }
        }
    }


