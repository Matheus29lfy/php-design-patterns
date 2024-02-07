<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplObserver;

class EnviarPedidoPorEmail implements SplObserver
{
  public function update(\SplSubject $subject): void
  {
    echo "Enviando e-mail de pedido gerado";
  }
 
}