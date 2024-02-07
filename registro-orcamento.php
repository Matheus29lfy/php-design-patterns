<?php
use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPHPHttpAdpater;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;
require_once 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdpater());
$registroOrcamento->registrar(new Orcamento());
