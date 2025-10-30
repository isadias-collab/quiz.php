<?php
// Obtém o total de questões, respostas corretas e respostas erradas armazenadas na sessão do jogo.
$total_questions   = $_SESSION['game']['total_questions'];   // Número total de questões definidas no jogo.
$correct_answers   = $_SESSION['game']['correct_answers'];   // Número de respostas corretas fornecidas pelo jogador.
$incorrect_answers = $_SESSION['game']['incorrect_answers']; // Número de respostas erradas fornecidas pelo jogador.
?>

<div class="container">
    <!-- Título principal -->
    <h1>Quiz do Cinema</h1>

    <hr> <!-- Linha de separação -->

    <!-- Exibe o número total de questões jogadas -->
    <h3>Total de questões: 
        <strong class="result-value"><?= $total_questions ?></strong>
    </h3>

    <!-- Exibe o número de respostas corretas -->
    <h3>Respostas corretas: 
        <strong class="result-value"><?= $correct_answers ?></strong>
    </h3>

    <!-- Exibe o número de respostas erradas -->
    <h3>Respostas erradas: 
        <strong class="result-value"><?= $incorrect_answers ?></strong>
    </h3>

    <!-- Botão para jogar novamente -->
    <div>
        <a href="index.php?route=start" class="btn btn-secondary p-3 w-50">Jogar novamente</a>
    </div>
</div>
