<?php
class Aluno {
    //atributos -caracteristicas
    //Por padrão , todo atributo de umaclasse é privado (private).
   private $nome;
   private $idade;
   private $matriculado = true;
   private $notas = [];

   public function __construct($nome, $idade) {
       $this->nome = $nome;
       $this->idade = $idade;
   }

   public function getNome() {
    return $this->nome;
   }
   public function setNome($nome) {
    $this->nome = $nome;
   }
   public function getIdade() {
    return $this->idade;
   }
   public function setIdade($idade) {
    $this->nome = $idade;
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

    public function exibirDados () {
        echo "Nome :  $this->nome \n";
        echo "Idade : $this->idade \n";
        echo "Situação : $this->matriculado \n";
    }
    
        
    
}

$aluno1 = new Aluno ("Ana", 15);
$aluno2 = new Aluno ("Carlos", 17);
$aluno3 = new Aluno ("Lucas", 16);
$aluno3->setIdade(15);

$aluno1->exibirDados();
$aluno3->exibirDados();
$aluno3->exibirDados();





?>