<?php
// $tela = fopen('php://stdout', 'w');
// fwrite($tela, 'Olá Mundo'.PHP_EOL);
// file_put_contents(STDIN, "Olá Mundo".PHP_EOL);
// file_put_contents("php://stdout", "Olá Mundo");
// fwrite(STDIN, "Olá Mundo \n");
$cursos =fopen('zip://valores.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);


?>
