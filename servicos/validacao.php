<?php

function validaNome(string $nome) : bool
{
    if (empty($nome))
    {
        MensagemErro('o nome não pode ser vazio');
               return false;
      }
    //aqui conta quantos caracteres tem no campo nome, se for menor do que 2 gera erro.
    else if(strlen($nome)< 3)
    {
    // gerando mensagem de erro e adicionado na sessão
    MensagemErro( 'O nome não pode ter menos que 3 caracteres');
               return false;
    }
    //aqui também conta a quantidade de caracteres e se for maior do que 40 gera erro.
    else if(strlen($nome) > 40)
    {
        MensagemErro('O nome é muito extenso');
              return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    //agora vamos validar os dados digitados nos inputs box

//agora vamos validar o campo da idade.
// verificando se o dados digitado na idade é um número.

    if (empty($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia';
        return false;
}

// quando iniciamos uma expressa com ! estamos negando o que vem a seguir
 else if (!is_numeric($idade))
{
    MensagemErro( 'Digite um numero para idade');
     return false;
}

//verifcando a quanditade de numeros digitados na idade
else if(strlen($idade) > 3)
{
    MensagemErro('A idade não pode ter mais do que 3 caracteres');
       return false;
}

return true;
}


