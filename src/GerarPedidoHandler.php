<?php
namespace Alura\DesignPattern;

use Alura\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use SplObserver;
use SplSubject;

class GerarPedidoHandler implements SplSubject
{
   /**@var array */
   private array $acoesAposGerarPedido = [];
   public Pedido $pedido;
   public function __construct(/*PedidoRepository, MailService */  )
   {
      
   }
   public function execute(GerarPedido $gerarPedido)
   {
      $orcamento = new Orcamento();
      $orcamento->quantidadeItens = $this->$gerarPedido->getNumeroItens();
      $orcamento->valor = $this->$gerarPedido->getValorOrcamento();
      
      $pedido = new Pedido();
      $pedido->dataFinalizacao = new \DateTimeImmutable();
      $pedido->nomeCliente = $this->$gerarPedido->getNomeCliente();
      $pedido->orcamento = $orcamento;
      $pedido->orcamento = $orcamento;

      $this->pedido = $pedido;
      $this->notify();
    
   
   }

  public function attach(SplObserver $observer)
  {
      $this->acoesAposGerarPedido[] = $observer;
  }

  public function detach(SplObserver $observer)
  {
  }

  public function notify()
  {
      foreach($this->acoesAposGerarPedido as $acao){
         $acao->update($this);
      }
  }
}
// $valorOrcamento = $argv[1];
// $numeroDeItens = $argv[2];
// $nomeCliente = $argv[3];

