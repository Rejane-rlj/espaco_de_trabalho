<?php
class Aluno extends Pessoa {
    private $notas = [];
    private $rg;

    public function __construct($nome , $dataDeNascimento, $disciplina, $cpf, $identificacao, $rg) {
        parent:: __construct($nome, $dataDeNascimento, $discipllina, $cpf, $identificacao);
        $this->rg = $rg;
    }
}



?>