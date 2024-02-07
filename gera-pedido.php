<?php
require_once 'vendor/autoload.php';


use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido; 
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;


$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->attach(new CriarPedidoNoBanco());
$gerarPedidoHandler->attach(new EnviarPedidoPorEmail());
$gerarPedidoHandler->attach(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);
