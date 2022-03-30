<?php

function gravar_em_arquivo(string $texto, $arquivo){
    $conexao_arquivo = fopen($arquivo, 'a+');
    fwrite($conexao_arquivo, "{$texto}\n\r");
    fclose($conexao_arquivo);
}

//gravar_em_arquivo(date('d/m/Y - H:m:s'),'arquivo.txt');

function ler_arquivo(string $arquivo){
    $conexao_arquivo = fopen($arquivo, 'a+');
    $texto_lido = fread($conexao_arquivo, filesize($arquivo));
    fclose($conexao_arquivo);

    return $texto_lido;
}

//echo ler_arquivo('arquivo.txt');
