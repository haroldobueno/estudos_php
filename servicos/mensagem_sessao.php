<?php

session_start();

function MensagemErro(string $mensagem) : void
{
$_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro () : ?string
{
    if(isset($_SESSION['mensagem-de-erro']))
    return $_SESSION['mensagem-de-erro'];
    return null;
}

function MensagemSucesso(string $mensagem) : void
{
$_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso () : ?string
{
    if(isset($_SESSION['mensagem-de-sucesso']))
    return $_SESSION['mensagem-de-sucesso'];
    return null;
}

function RemoverMensagemErro () : void
{
    if(isset($_SESSION['mensagem-de-erro']))
   unset( $_SESSION['mensagem-de-erro']); 
    
}

function RemoverMensagemSucesso () : void
{
    if(isset($_SESSION['mensagem-de-sucesso']))
   unset( $_SESSION['mensagem-de-sucesso']); 
    
}