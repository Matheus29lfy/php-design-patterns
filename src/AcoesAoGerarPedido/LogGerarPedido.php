<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplObserver;

class LogGerarPedido implements SplObserver
{
  public function update(\SplSubject $subject): void
  {
    echo "Gerando log da criação de pedido";
  }
}
