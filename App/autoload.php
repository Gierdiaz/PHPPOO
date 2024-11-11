<?php

spl_autoload_register(function ($class) {
    // Define o diretório base (diretório App)
    $baseDir = __DIR__ . '/App/';

    // Remove o prefixo "App\" do namespace da classe
    $class = str_replace('App\\', '', $class);

    // Substitui as barras invertidas (usadas no namespace) por barras normais (para caminhos de diretórios)
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    // Verifica se o arquivo existe e, se sim, inclui o arquivo
    if (file_exists($file)) {
        require_once $file;
    }
});
