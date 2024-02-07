<?php
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\RegistroOrcamento;
use Alura\DesignPattern\Relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\Relatorio\ArquivoZipExportado;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;
use Alura\DesignPattern\Relatorio\PedidoExportado;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$pedido = new Pedido();
$pedido->nomeCliente = 'Matheus Santos';
$pedido->dataFinalizacao = new DateTimeImmutable();

// $orcamentoExportado = new OrcamentoExportado($orcamento);
$pedidoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoXmlExportado('pedido');
// $orcamentoExportadoXml = new ArquivoZipExportado('pedido.array');

// echo $orcamentoExportadoXml->salvar($orcamentoExportado);
echo $orcamentoExportadoXml->salvar($pedidoExportado);
