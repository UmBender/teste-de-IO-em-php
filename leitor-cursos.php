<?php
$arquivo = fopen('lista-cursos.txt', 'r');

// while (!feof($arquivo)) {
//     $curso = fgets($arquivo);
//     echo $curso;
// }
$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos =fread($arquivo,$tamanhoDoArquivo);
echo $cursos;

fclose($arquivo);
?>

