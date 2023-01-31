<?php

$meuCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv','w');
foreach ($meuCursos as $curso) {

    $linha = [trim($curso), 'Sim'];
    // $linha = [trim($curso), ' Sim'.PHP_EOL];
    fputcsv($arquivoCsv, $linha);
    // fwrite($arquivoCsv, implode(',',$linha));
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), 'Não'];
    // $linha = [trim($curso), ' Não'.PHP_EOL];
    fputcsv($arquivoCsv, $linha);
    // fwrite($arquivoCsv, implode(',', $linha));
}
