<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplObserver;

class CriarPedidoNoBanco implements SplObserver
{
  public function update(\SplSubject $subject): void
  {
    echo "Salvando pedido no banco de dados";
  }
}