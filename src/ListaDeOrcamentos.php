<?php

use Alura\DesignPattern\Orcamento;

class ListaDeOrcamentos
{
  private array $orcamentos = [];

  public function addOrcamento(Orcamento $orcamento)
  {
    $this->orcamentos[] = $orcamento;
  }

  public function getOrcamentos(): array
  {
    return $this->orcamentos;
  }
}