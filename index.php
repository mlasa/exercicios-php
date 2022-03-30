<?php
    include('trabalhando-com-arquivo.php');
    gravar_em_arquivo('Teste include', 'arquivo.txt');

    echo ler_arquivo('arquivo.txt');