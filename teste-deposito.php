<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

try{
  $contaCorrennte = new ContaCorrente(new Titular(new CPF('123.456.789-0'),'Vincius Dias' ,new Endereco('Cidade', 'bairro', 'rua', 'numero')));
}catch(DomainException $ex){
  echo $ex->getMessage();
}

// try{
//   $contaCorrennte->deposita(-100);
// }catch(InvalidArgumentException $ex){
//   echo "Valor a depositar precisa ser positivo";
// }

?>