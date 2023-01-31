<?php

$contexto  = stream_context_create([
    'zip' => [
        'password' => '162412',
    ]
]);
echo file_get_contents("zip://teste.zip#lista-cursos.txt", context: $contexto);


?>

