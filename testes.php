<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

// ;$calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Icms())

// dd('aqui');
$calculadora =  new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 100;
// $orcamento->valor = 600;
// $orcamento->quantidadeItens = 6;

echo $calculadora->calculaDescontos($orcamento, new Iss(new Icms()));