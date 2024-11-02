<?php
require_once 'Animal.php';

class Mamifero extends Animal {
    // Atributo exclusivo da classe Mamífero.
    protected $quantidadeDePatas;
    // Método Construtor que incluios atributos do Animal e Mamífero

    public function __construct($nome, $idade, $cor,$quantidadeDePatas) {
        // Chamando o construtor da classe Animal (PAI)
        parent:: __construct($nome,$idade, $cor);
        $this->quantidadeDePatas =$quantidadeDePatas;
    }

    // Método exclusivo da classe Animal
    public function comunicar() {
     echo "Mamifero fazendo barulho \n";
    }
}
?>