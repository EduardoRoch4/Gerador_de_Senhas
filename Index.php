<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <link rel="stylesheet" href="teste123.css"> <!-- Importa o CSS -->
</head>
<body>
    <h1>Gerador de Senhas</h1>

    <div class="container">
    <form method="POST">
        <button type="submit" name="gerar" class="botao">Gerar Senha</button>
    </form>  </div>



    <div class="container2">
    <?php
    if (isset($_POST['gerar'])) {
        function gerarSenha($tamanho = 10) {
            $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$&*';
            return substr(str_shuffle($caracteres), 0, $tamanho);
        }
        
        echo "<h2><strong>Senha gerada:</strong> " . gerarSenha() . "</h2>";
    }
    ?>
    </div>
</body>
</html>
