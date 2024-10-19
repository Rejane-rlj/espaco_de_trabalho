<?php 
$nota1 = 4.0;
$nota2 = 6.0;
$nota3 = 3.0;

$media = ( $nota1 + $nota2 + $nota3 ) / 3;
if ($media >= 7) {
    echo "Aprovado.";
}  else if($media >= 5) {
    echo "Recuperação.";
}  else {
    echo "Reprovado.";
}
?>