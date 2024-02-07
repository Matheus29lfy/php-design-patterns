<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoComDuasAliquotas
{
     protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
  {
      return $orcamento->valor > 300 && $orcamento->valor() > 3;
  }

  protected function calculaTaxaMaxima(Orcamento $orcamento): float
  {
      return $orcamento->valor * 0.04;
  }
  protected function calculaTaxaMinima(Orcamento $orcamento): float
  {
      return $orcamento->valor * 0.025;
  }
}