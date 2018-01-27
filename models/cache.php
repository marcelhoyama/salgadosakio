<?php

class cache extends model{
    
    private  $cache;
    
    public function setVar($nome, $valor){
        $this->readCache();
        $this->cache->$nome = $valor;
        $this->saveCache();
                
    }
    
    public function getVar($nome) {
        $this->readCache();
        return $this->cache->$nome;
        
    }
    
    
    private function readCache(){
        $this->cache=new stdClass();
        if(file_exists('cache.cache')){
            $this->cache= json_decode(file_get_contents('cache.cache'));
        }
    }
    
    private function saveCache(){
        file_put_contents("cache.cache", json_encode($this->cache));
    }
    
    public function cacheSave( ) {
        
         if(file_exists( 'cache.cache')){
            require 'cache.cache';
            
        }else{
         
         ob_start();
         require BASE_URL;'contato';
         $html  = ob_get_contents();
         
         ob_end_clean();
         file_put_contents('cache.cache', $html);
        echo $html;
            
      
     
        }
        
    }
}

