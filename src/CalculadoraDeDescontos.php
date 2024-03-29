<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\DescontoMaisDe500Valor;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
  public function calculaDescontos(Orcamento $orcamento): float
  {
      $cadeiaDeDescontos = new DescontoMaisDe5Itens( 
          new DescontoMaisDe500Valor( 
              new SemDesconto()
            )
          );
         $descontoCalculado =  $cadeiaDeDescontos->calculaDesconto($orcamento);
         $logDesconto = new LogDesconto();
         $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
  }
}