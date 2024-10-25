<?php
class Professor {
    //atributos -caracteristicas
    //Por padrão , todo atributo de umaclasse é privado (private).
   private $nome;
   private $cpf;
   private $disciplina;
   private $identificação;

   public function getNome () {
    return $this->nome;
   }
   public function getDisciplina () {
    return $this->disciplina;
   }
   public function setDisciplina ($disciplinaNova) {
    $this->nome =$disciplinaNova;
   }
   public function setCpf ($cpfNovo) {
    $this->cpf = $cpfNovo;
   }
        
    
}

?>
