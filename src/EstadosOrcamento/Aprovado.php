<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{ 
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
   return $orcamento->valor * 0.02;
  }

  public function aprova(Orcamento $orcamento)
  {
   return  $orcamento->estadoAtual = new Aprovado();
  }
  public function finaliza(Orcamento $orcamento)
  {
     $orcamento->estadoAtual = new Finalizado();
  }
}

