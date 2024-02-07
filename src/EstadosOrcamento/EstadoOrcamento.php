<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{ 
  abstract public function calculaDescontoExtra(Orcamento $orcamento):float;
   public function aprova(Orcamento $orcamento)
  {
   throw new \DomainException('Este orçamento não pode aprovado');
  }

   public function reprova(Orcamento $orcamento)
  {
    throw new \DomainException('Este orçamento não pode reprovado');
  }


   public function finaliza(Orcamento $orcamento)
  {
    throw new \DomainException('Este orçamento não pode finalizado');
  }

}

