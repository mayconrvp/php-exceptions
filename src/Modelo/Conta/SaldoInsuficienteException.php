<?php 

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
  public function __construct(float $valorDoSaque, float $saldoAtual)
  {
    $mensagem = "Você tentou sacar R$$valorDoSaque, mas tem apenas R$$saldoAtual em conta";
    parent::__construct($mensagem);
  }
}