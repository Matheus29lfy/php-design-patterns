<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Finalizado
{ 
    public function calculaDescontoExtra(Orcamento $orcamento)
    {
     throw new \DomainException('Um orçamento finalizado não pode receber desconto');
    }

}

