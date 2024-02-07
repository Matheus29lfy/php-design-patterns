<?php

use Alura\DesignPattern\Pedido\CriadorDePedido;
use Alura\DesignPattern\Pedido\TemplatePedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\Pedido;

require_once 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();
// $dados = new TemplatePedido( md5('a'), new \DateTimeImmutable());
// $dados->dataFinalizacao = new \DateTimeImmutable();
// $dados->nomeCliente =;
for($i = 0; $i < 10000; $i++){
  // $pedido = new Pedido();
  // $pedido->template = $dados;
  // $pedido->orcamento = new Orcamento();
  $orcamento = new Orcamento();
  $pedido = $criadorPedido->criaPedido(
    'Matheus Santos',
    date('Y-m-d'),
    $orcamento
  );
  $pedidos[] = $pedido;
}

echo memory_get_peak_usage();