<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Pedido;

class ArquivoZipExportado implements ArquivoExportado
{
   private string $nomeArquivoInterno;
   public function __construct(string $nomeArquivoInterno)
   {
      $this->nomeArquivoInterno = $nomeArquivoInterno;
   }
   public function salvar(ConteudoExportado $conteudoExportado): string
   {
  
      $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
      $arquivoZip = new \ZipArchive();
      $arquivoZip->open($caminhoArquivo);
      $arquivoZip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado));
      $arquivoZip->close();

      return $caminhoArquivo;
   }
}