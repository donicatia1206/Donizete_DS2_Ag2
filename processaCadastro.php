<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

<div class="w3-container w3-content w3-padding-64" style="max-width:600px">
    <div class="w3-card-4 w3-white w3-round-large">
        <div class="w3-container w3-teal w3-round-large">
            <h2>Dados Cadastrados</h2>
        </div>

        <div class="w3-container w3-padding-16">
            <?php
            // Armazenando os dados enviados pelo método POST em variáveis com os names numéricos
            $nome1 = $_POST['nome1'] ?? 'Não informado';
            $idade2 = $_POST['idade2'] ?? 'Não informado';
            $profissao3 = $_POST['profissao3'] ?? 'Não informado';
            $salario4 = $_POST['salario4'] ?? 0;
            $experiencia5 = $_POST['experiencia5'] ?? 'Não informado';

            // Formatação do salário para Moeda Real (R$)
            $salarioFormatado = number_format((float)$salario4, 2, ',', '.');

            // Exibição dos dados linha por linha organizados em tags HTML
            echo "<p><strong>Nome Completo:</strong> " . htmlspecialchars($nome1) . "</p>";
            echo "<p><strong>Idade:</strong> " . htmlspecialchars($idade2) . " anos</p>";
            echo "<p><strong>Profissão:</strong> " . htmlspecialchars($profissao3) . "</p>";
            echo "<p><strong>Salário Pretendido:</strong> R$ " . $salarioFormatado . "</p>";
            echo "<p><strong>Experiência Anterior:</strong> " . htmlspecialchars($experiencia5) . "</p>";
            ?>

            <hr class="w3-clear">

            <!-- Mensagem personalizada obrigatória contendo Nome, Profissão e Experiência -->
            <div class="w3-panel w3-pale-green w3-leftbar w3-border-green w3-round">
                <h3>Confirmação de Recebimento</h3>
                <p>
                    Seja bem-vindo(a), <strong><?php echo htmlspecialchars($nome1); ?></strong>! 
                    Seu cadastro para a vaga de <strong><?php echo htmlspecialchars($profissao3); ?></strong> foi processado com sucesso. 
                    Analisamos o seu histórico referente a <em>"<?php echo htmlspecialchars($experiencia5); ?>"</em> e entraremos em contato em breve para os próximos passos no processo seletivo da Lojas Brincos e Companhia.
                </p>
            </div>

            <!-- Botão para retornar ao formulário -->
            <div class="w3-center w3-margin-top">
                <a href="cadastro.html" class="w3-btn w3-teal w3-round-large">Voltar ao Formulário</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
