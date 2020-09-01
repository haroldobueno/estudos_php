<?php

session_start();

function DefineCategoriaCompetidor(string $nome , string $idade) : ?string
{

if(validaNome($nome) && validaIdade($idade))
{
    RemoverMensagemErro();
    $categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Adolescente';
$categoria[] = 'Adulto';

if ($idade >= 3 && $idade <= 12)
{
    
    for ($i =0; $i <= count($categoria); $i++){
        if($categoria[$i]== "Infantil") 

        {
        MensagemSucesso( "O ".$nome." Está na categoria infantil");
       
        return null;
        }
    }

}
else if ($idade >= 12 && $idade <=18)
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adolescente")
        {

           MensagemSucesso("O ".$nome." Está na categoria Adolescente");
            
            return null;
    }
  }
}
else
{
    for ($i =0; $i <= count($categoria); $i++)
    {
        if($categoria[$i]== "Adulto")
        {

            MensagemSucesso("O ".$nome." Está na categoria Adulto");
                return null;
    }

}

}

}
else
{
    RemoverMensagemSucesso();
 return obterMensagemErro();
}

}