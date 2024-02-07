<?php
namespace Alura\DesignPattern;

class GerarPedido
{
   private float $valorOrcamento;
   private int $numeroItens;
   private string $nomeCliente;

   public function __construct(
    float $valorOrcamento,
    int $numeroItens,
    string $nomeCliente
   ){
    $this->valorOrcamento = $valorOrcamento;
    $this->numeroItens = $numeroItens;
    $this->nomeCliente = $nomeCliente;
   }

   public function getValorOrcamento():string
   {
      return $this->valorOrcamento;
   }
   public function getNumeroItens():int
   {
      return $this->numeroItens;
   }
   public function getNomeCliente():string
   {
      return $this->nomeCliente;
   }

}
// $valorOrcamento = $argv[1];
// $numeroDeItens = $argv[2];
// $nomeCliente = $argv[3];

