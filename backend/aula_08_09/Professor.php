<?php
class Professor {
    //atributos -caracteristicas
    //Por padrão , todo atributo de umaclasse é privado (private).
   private $nome;
   private $cpf;
   private $disciplina;
   private $identificacao;

   public function getNome () {
    return $this->nome;
   }
   public function getDisciplina () {
    return $this->disciplina;
   }
   //parâmetro
   public function setDisciplina ($disciplinaNova) {
    $this->disciplina = $disciplinaNova;
   }
   public function setCpf ($cpfNovo) {
    $this->cpf = $cpfNovo;
   }
        
    
}

?>
