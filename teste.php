<?php
//iniciar uma sessão
session_start();
//criar array vazia
$categoria = [];

//adicionar itens na array 
$categoria[] = 'Infantil';
$categoria[] = 'Adolescente';
$categoria[] = 'Adulto';

//imprime na tela de forma organizada as informações da array.
//print_r($categoria);

// criar variaveis com valores
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//agora vamos validar os dados digitados nos inputs box
if (empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'o nome não pode ser vazio';
    header("location: index.php");
    return;
  }
//aqui conta quantos caracteres tem no campo nome, se for menor do que 2 gera erro.
else if(strlen($nome)< 3)
{
// gerando mensagem de erro e adicionado na sessão
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter menos que 3 caracteres';
    header("location: index.php");
    return;
}
//aqui também conta a quantidade de caracteres e se for maior do que 40 gera erro.
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header("location: index.php");
    return;
}

//agora vamos validar o campo da idade.
// verificando se o dados digitado na idade é um número.
else if (empty($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia';
    header("location: index.php");
    return;
}

// quando iniciamos uma expressa com ! estamos negando o que vem a seguir
 else if (!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Digite um numero para idade';
    header("location: index.php");
    return;
}

//verifcando a quanditade de numeros digitados na idade
else if(strlen($idade) > 3)
{
    $_SESSION['mensagem-de-erro'] = 'A idade não pode ter mais do que 3 caracteres';
    header("location: index.php");
    return;
}


//var_dump imprime na tela o tipo de variavel e quantidade de caracteres

//var_dump($nome);
//var_dump($idade);

//agora vamos fazer a mesma coisa do IF acima mas com For

if ($idade >= 3 && $idade <= 12)
{
    for ($i =0; $i <= count($categoria); $i++){
        if($categoria[$i]== "Infantil") 
        {

        $_SESSION['mensagem-de-sucesso'] = "O ".$nome." Está na categoria infantil";
        header("location: index.php");
        return;
        }
    }

}
else if ($idade >= 12 && $idade <=18)
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adolescente")
        {

            $_SESSION['mensagem-de-sucesso'] = "O ".$nome." Está na categoria Adolescente";
            header("location: index.php");
            return;
    }
  }
}
else
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adulto")
        {

            $_SESSION['mensagem-de-sucesso'] = "O ".$nome." Está na categoria Adulto";
            header("location: index.php");
            return;
    }

}

}

?>