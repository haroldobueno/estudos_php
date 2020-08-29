


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
$nome = 'Haroldo';
$idade = 20;

//var_dump imprime na tela o tipo de variavel e quantidade de caracteres
//var_dump($nome);
//var_dump($idade);



//agora vamos fazer a mesma coisa do IF acima mas com For

if ($idade >= 6 && $idade <= 12)
{
    for ($i =0; $i <= count($categoria); $i++){
        if($categoria[$i]== "Infantil") 
        {

        echo "O".$nome."Está na categoria infantil";
        }
    }

}
else if ($idade >= 12 && $idade <=18)
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adolescente")
        {

        echo "O".$nome."Está na categoria Adolescente";

    }
  }
}
else
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adulto")
        {

        echo "O".$nome."Está na categoria Adulto";

    }

}

}

?>





