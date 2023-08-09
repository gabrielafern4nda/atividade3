<?php
// Verifica se a requisição foi feita por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados enviados pelo AJAX
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];

    // Simulação de inserção em um array
    $aluno = array(
        "matricula" => $matricula,
        "nome" => $nome
    );

    // Retorna a resposta em formato JSON
    echo json_encode($aluno);
}
?>