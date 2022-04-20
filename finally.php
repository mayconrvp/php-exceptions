<?php 

$arquivo = fopen('php://temp', 'w');
try{
  fwrite($arquivo, 'Qualquer Coisa');
}catch (Throwable $e){
  echo 'Erro ao escrever no arquivo' . PHP_EOL;
}finally{
  fclose($arquivo);
}

function a(): int{
  try{
    echo "Código";
    return 0;
  }catch(Throwable $e){
    echo "Problema";
    return 1;
  }finally{
    echo "Final da função";
  }
}

echo a();