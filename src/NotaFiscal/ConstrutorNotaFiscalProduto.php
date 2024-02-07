<?php
namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
  public function constroi():NotaFiscal
  {
     $valorNotaFiscal = $this->notaFiscal->valor();
     $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.02;

    return $this->notaFiscal; 
  }
  }
