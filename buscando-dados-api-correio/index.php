<?php

$api_correios = "http://correiosapi.apphb.com";
$cep_a_consultar = 13052570;

$response = file_get_contents("$api_correios/cep/".$cep_a_consultar);

if($response){
    echo "<h1><b>Resultado: ".$response."</b></h1>";
}else{
    echo "<h1><b>Não foi possível encontrar os dados</b></h1>";
}