<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class CriadorDePedido
{

  private $templates = [];

  public function criaPedido(
    string $nomeCliente,
    string $dataFormatada, 
    Orcamento $orcamento
  ):Pedido {
    $template = $this->gerarTemplate($nomeCliente, $dataFormatada);
    $pedido = new Pedido();
    $pedido->template = $template;
    $pedido->orcamento = $orcamento;

    return $pedido;
  }

  private function gerarTemplate(string $nomeCliente, string $dataFormatada)
  {
    $hash = md5($nomeCliente . $dataFormatada);
    if(!array_key_exists($hash, $this->templates)){
      $template = new TemplatePedido(
        $nomeCliente,
        new \DateTimeImmutable($dataFormatada)
      );
       $this->templates[$hash] = $template;
    }

    return $this->templates[$hash];
  }
}