<?php
$aluno = [
    "nome" => "Fany",
    "idade" => 17,

    "estudar" => function() use (&$aluno){
        echo "{$aluno['nome']} está estudando";
    }
];

$aluno['estudar']();

?>
