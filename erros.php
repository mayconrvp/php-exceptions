<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 0);

set_error_handler(function ($errno, $errsrt, $errfile, $errline) {
  switch ($errno){
    case E_WARNING:
      echo "Aviso: Isso é perigoso " . PHP_EOL;
      break;
    case E_NOTICE:
      echo "Melhor não fazer isso" . PHP_EOL;
      break;
  }
});

//variavel não declarada
echo $variavel;

//erro de variavel não declarada e de acessar array null
echo $array[12];

echo CONSTANTE;

