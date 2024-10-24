<?php
// Array -> é uma coleção ordenada de elementos.Cada elemmento pode ser acessado pelo índice.Arrays são usados para armazenar listas de itens,como nomes de alunos ou notas.

//$alunos = [ "Ana", "Bruno", "Carlos", "Daniela"];
// echo "Primeiro Aluno : " . $alunos;[0]

$notasMatematica = [
    "Ana" => 8.5,
    "Bruno" => 7.5,
    "Carlos" => 9.0,
    "Daniela" => 6.0
];
echo "Nota do Bruno: " . $notasMatematica["Bruno"];
?>