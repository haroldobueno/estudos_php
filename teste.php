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
  
}
//aqui conta quantos caracteres tem no campo nome, se for menor do que 2 gera erro.
if(strlen($nome)< 3)
{
// gerando mensagem de erro e adicionado na sessão
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter menos que 3 caracteres';
    header("location: index.php");

}
//aqui também conta a quantidade de caracteres e se for maior do que 40 gera erro.
if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header("location: index.php");

}

//agora vamos validar o campo da idade.
// verificando se o dados digitado na idade é um número.
if (empty($idade))
{
    echo 'A idade não pode ser vazia';
    return;
}

// quando iniciamos uma expressa com ! estamos negando o que vem a seguir
if (!is_numeric($idade))
{
    echo 'digite um número para idade';
}

//verifcando a quanditade de numeros digitados na idade
if(strlen($idade) > 3)
{
    echo'A idade não pode ter mais do que 3 caracteres';
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

        echo "O ".$nome." Está na categoria infantil";
        }
    }

}
else if ($idade >= 12 && $idade <=18)
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adolescente")
        {

        echo "O ".$nome." Está na categoria Adolescente";

    }
  }
}
else
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adulto")
        {

        echo "O ".$nome." Está na categoria Adulto";

    }

}

}

?>