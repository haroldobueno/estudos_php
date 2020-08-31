<?php
//iniciando a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
<p>Formulário para inscrição na competição</p>
<form action="teste.php" method="post">
    <?php
    //montar ternario com PHP para exibir mensagem de sucesso ou erro
    $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
    if(!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }
    
    $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
    if(!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }
    
    ?>
<p>Informe seu Nome <input type="text" name="nome"></p>
<p>Informe sua idade <input type="text" name="idade"></p>
<p><input type="submit" value="Enviar dados"></p>
</form>
    
</body>
</html>