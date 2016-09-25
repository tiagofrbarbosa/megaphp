<?php
$repetidos = 0;
$linha[] = 0;

 for($c=0;$c<=60;$c++){   
for($i=0;$i<=5;$i++){
    redefine:
$busca = rand(1,60);
if(in_array($busca,$linha)){
             //$repetidos = $repetidos + 1;
        goto redefine;
}else{
        $linha[$i] = $busca;
}
  
  }
  //$mostra_stat = $repetidos;
  //$repetidos = 0;
  sort($linha);
  $conjunto = implode('-',$linha);
  $combina[$c] = $conjunto;

}
sort($combina);
print_r($combina);?><br><?php