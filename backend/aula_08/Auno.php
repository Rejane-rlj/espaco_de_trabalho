<?php
class Aluno {
    //atributos -caracteristicas
    //Por padrão , todo atributo de umaclasse é privado (private).
   private $nome;
   private $idade;
   private $matriculado = true;
   private $notas = [];

   public function getNome() {
    return $this->nome;
   }

   public function setNome($nomeNovo) {
    $this->nome = $nomeNovo;
   }
      
   

    //métodos - ações
    //Por padrão , todo mmétodo de uma classe é público (public).
    public function situacao () {
        if($this->matriculado == true) {
            $this-> matriculado = false;
        }  else if($this->matriculado == false) {
            $this-> matriculado = true;
        }
    }
        
    
}
?>
