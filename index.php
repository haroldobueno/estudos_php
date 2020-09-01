<?php

include "servicos/mensagem_sessao.php";
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
    $mensagemDeSucesso = obterMensagemSucesso();
    if(!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }
    
    $mensagemDeErro = obterMensagemErro();
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