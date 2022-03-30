<?php

$json_filme = '{
    "titulo":"Avatar",
    "sinopse":"No exuberante mundo alienígena de Pandora vivem os Na\'vi, seres que parecem ser primitivos, mas são altamente evoluídos.",
    "ano": 2006,
    "diretor": "James Cameron",
    "premios":["Oscar de Melhor Fotografia","Prêmio Saturno para Melhor Direção","Critcs\' Choice Award: Melhores Efeitos Visuais"]
}';

$array_filme = json_decode($json_filme);

echo "<p><b>Filme: </b>".$array_filme->titulo."</p>";
echo "<p><b>Sinopse: </b>".$array_filme->sinopse."</p>";
echo "<p><b>Dirigido por: </b>".$array_filme->diretor."</p>";
echo "<p><b>Prêmios: </b>"."</p>";

if(count($array_filme->premios)){
    for($index=0; $index < count($array_filme->premios); $index++){
        echo "<p><b>* </b>".$array_filme->premios[$index]."</p>";
    }
}else{
    echo "<p> Não possui premiações até o momento. </p>";
}