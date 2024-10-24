<?php
$numeroAlunos = 3;
$boletim = [];

for($i = 1; $i <= $numeroAlunos; $i++) {
    $nome = readline(" Digite o nome do aluno $i: ");
    $nota1 = readline ("Digite a primeira nota:");
    $nota2 = readline ("Digite a segunda nota:");
    $media = ($nota1 + $nota2) / 2;

    $boletim[$nome] = $media;
}
echo "Boletim Escolar: \n";
foreach($boletim as $aluno => $media) {
    echo "$aluno - Média: $media\n";
}

echo " Resultados Finais :\n";
foreach($boletim as $aluno => $media) {
    if($media >= 6){
        echo "$aluno foi APROVADO com média $media. \n";
    } else {
        echo "$aluno foi REPROVADO com média $media. \n";
    }
}
?>
