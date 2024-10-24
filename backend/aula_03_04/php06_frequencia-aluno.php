<?php
$aulasDadas = 40;
$faltas = 5;
$aulsAssistidas = $aulasDadas - $faltas;
$frequencia = ( $aulasAssistidas / $aulasDadas) * 100;

if($frequencia >= 75) {
    echo " A aluna está apta para fazer a prova final .";
} else{
    echo " A aluna nao está apta para fazer a prova final .";
}


?>