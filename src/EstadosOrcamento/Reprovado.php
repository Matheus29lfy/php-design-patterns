<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{ 
  public function calculaDescontoExtra(Orcamento $orcamento)
  {
   throw new \DomainException('Um orcamento reprovado não pode receber desconto');
  }

  public function finaliza(Orcamento $orcamento)
  {
     $orcamento->estadoAtual = new Finalizado();
  }
}

