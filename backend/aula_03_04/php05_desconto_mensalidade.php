<?php
$nota = 6 ;
$mensalidade = 1000 ;

if($nota >= 9) {
    $desconto = $mensalidade * 0.20;
} else if($nota >= 7) {
    $desconto = $mensalidade * 0.10;
} else {
    $desconto = 0;
}

$mensalidadeComDesconto = $mensalidade - $desconto;
echo " Mensalidade com desconto : R$ " . $mensalidadeComDesconto;
?>