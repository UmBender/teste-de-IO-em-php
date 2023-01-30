<?php

$valor = file('lista-cursos.txt');
foreach ($valor as $key => $value) {
    echo "Na posicao " . $key. " a string: " . $value;
}
?>

