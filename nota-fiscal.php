<?php
use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require_once 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();

$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 1500;

$item3 = new ItemOrcamento();
$item3->valor = 1000;
$notaFiscal = $builder->paraEmpresa('1234567891011', 'Matheus Santos Dev')
         ->comItem($item1)
         ->comItem($item2)
         ->comItem($item3)
         ->comObservacoes('Essa nota fiscal foi construida com um construtor')
         ->constroi();

         echo $notaFiscal->valorImpostos;