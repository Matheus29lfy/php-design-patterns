<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use Alura\DesignPattern\EstadosOrcamento\Finaliza;

class Orcamento implements Orcavel
{
  private array $itens;
  public float $valor;
  public EstadoOrcamento $estadoAtual;

  public function __construct()
  {
    $this->estadoAtual = new EmAprovacao();
    $this->itens = [];
  }

  public function aplicaDescontoExtra()
  {
    $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
  }

  public function aprova()
  {
    $this->estadoAtual->aprova($this);
  }
  public function reprova()
  {
    $this->estadoAtual->reprova($this);
  }
  public function finaliza()
  {
    $this->estadoAtual->finaliza($this);
  }
  public function addItem(Orcavel $item)
  {
    $this->itens[] = $item;
  }

  public function valor(): float
  {
    return array_reduce(
      $this->itens, 
        fn (float $valorAcumulado,Orcavel $item) => $item->valor() + $valorAcumulado,
        0);
  }
  // public function calculaDescontoExtra(): float
  // {
  //   if($this->estadoAtual === "EM_APROVAÇÃO"){
  //     return $this->valor * 0.05;
  //   }
  //   if($this->estadoAtual === "APROVADO"){
  //     return $this->valor * 0.02;
  //   }

  //   throw new \DomainException('Orçamentos reprovados e finalizados não podem receber desconto');
  // }
}