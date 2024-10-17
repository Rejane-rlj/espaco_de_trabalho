<?php
// Tipos de dados em varáveis
$nome = " Maria"; // string
$idade = 18; // number,inteiro
$altura = 1.62; //number , decimal
$matriculado = true ; // boolean
$materias = array("Matemática" , "História" , "Física"); // Array

//echo "\n Nome: " . $nome;
//echo "\n Idade: " . $idade;
//echo "\n Altura: " . $altura . "m";
//echo "\n Matriculado: " . ($matriculado ? "Sim" : "Não");
//echo "\n Materias: " . implode(",", $materias);

// Estruturas condicionais - if , else if , else
// Se a nota For a partir de 6 , ele passou de série
// $notaFinal = 3;
// if($notaFinal >= 6) {
//   echo " Aluno Aprovado !";
//} else if($notaFinal < 6) {
//    echo  " Aluno Reprovado !";
//} else {
//   echo " Nota Inválida !";
//}

// Operadores de Comparação
// >= - Maior e Igual
// <= - Menor e Igual
// > - Maior
// < - Menor
// == - Igual
// !=  - Diferente

// Operadores Lógicos
//and(e) - &&
//or(ou) - || 

// Para a aluna ser aprovada , precisa que a nota final seja a partir de 60 E que a frequência seja a partir de 75%
// $notaAlunaFinal = 70;
// $frequenciaAluna = 85; // Percentual de presença
// if($notaAlunaFinal >= 60 && $frequenciaAluna >= 75) {
//     echo " Aluna Aprovada !";
// } else {
//     echo " Aluna Reprovada !";
//}

// Para a aluna ser aprovada , precisa que a nota final seja a partir de 60 E que a frequência seja a partir de 75%
$notaAlunaFinal = 70;
$frequenciaAluna = 45; // Percentual de presença
if($notaAlunaFinal >= 60 || $frequencia >=75) {
    echo " Aluna Aprovada !";
}
?>