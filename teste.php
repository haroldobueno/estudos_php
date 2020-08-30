<?php

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
    echo 'o nome não pode ser vazio';
    return;
}
//aqui conta quantos caracteres tem no campo nome, se for menor do que 2 gera erro.
if(strlen($nome)< 3)
{
    echo'O nome deve conter mais do que 2 caracteres';
    return;
}
//aqui também conta a quantidade de caracteres e se for maior do que 40 gera erro.
if(strlen($nome) > 40)
{
    echo'O nome é muito extenso';
return; 
}

//agora vamos validar o campo da idade.
// verificando se o dados digitado na idade é um número.
// quando iniciamos uma expressa com ! estamos negando o que vem a seguir
if (!is_numeric($idade))
{
    echo 'digita um número para idade';
}

//verifcando a quanditade de numeros digitados na idade
if(strlen($idade) > 3)
{
    echo'A idade não pode ter mais do que 4 caracteres';
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