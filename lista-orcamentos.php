<?php
require_once 'vendor/autoload.php';
use Alura\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 1350;

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);


foreach($listaOrcamentos->getOrcamentos() as $orcamento)
{
echo "Valor: " . $orcamento->valor . PHP_EOL;
echo "Estado: " . get_Class($orcamento->estadoAtual) . PHP_EOL;
echo "Qtd. Itens: " . $orcamento->quantidadeItens . PHP_EOL;

echo PHP_EOL;
}
// $valorOrcamento = $argv[1];
// $numeroDeItens = $argv[2];
// $nomeCliente = $argv[3];

// $gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
// $gerarPedidoHandler = new GerarPedidoHandler();
// $gerarPedidoHandler->attach(new CriarPedidoNoBanco());
// $gerarPedidoHandler->attach(new EnviarPedidoPorEmail());
// $gerarPedidoHandler->attach(new LogGerarPedido());
// $gerarPedidoHandler->execute($gerarPedido);
