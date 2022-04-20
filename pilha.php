<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    }catch(Exception $ex){
        //echo 'Na função 1, resolvi o problema da função 2' . PHP_EOL;
        echo 'Exception message: ' . $ex->getMessage() . PHP_EOL;
        echo 'Exception in line: ' . $ex->getLine() . PHP_EOL;
        echo 'Trace: ' . $ex->getTraceAsString() . PHP_EOL;

    }catch(Error $err){
        echo 'Error message: ' . $err->getMessage() . PHP_EOL;
        echo 'Error in line: ' . $err->getLine() . PHP_EOL;
        echo 'Trace: ' . $err->getTraceAsString() . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao3()
{
    echo 'Entrei na função 3' . PHP_EOL;
    $divisao = intdiv(5,0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'Valor';  
    
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 3' . PHP_EOL;
}

function funcao2(){
    echo 'Entrei na função 2' . PHP_EOL;
    $divisao = intdiv(5,0);
    $exception = new BadFunctionCallException("mensagem da exceção lançada");
    throw $exception;
    echo 'Sainda da função 2';
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;