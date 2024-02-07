<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdpater implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        //instanciado reactr php
        //preparacao dos dados
        //fazer reequisição
        echo "ReactPHP";
    }
}