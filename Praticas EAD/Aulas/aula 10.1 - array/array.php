<?php
// array e vetor é a mesma coisa.
$Cor = array();

$Cor[] = 'Azul';
$Cor[] = 'Amarelo';
$Cor[] = 'Roxo';
$Cor[] = 'Lilás';
$Cor[] = 'Vermelho';

echo 'TOTAL: ' . count($Cor) . '<br>';

for($i=0; $i < count($Cor); $i++){
    
    echo 'A cor armazenada é: ' . $Cor[$i] . '<br>';

}


// echo $cor[1];

// var_dump($cor); mostrar o código.

// echo '<pre>';
//     print_r($cor);
// echo '</pre>';

?>
