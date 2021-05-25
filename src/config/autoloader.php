<?php

namespace src\config;

spl_autoload_register(function ($class) {
    $nomeDaClasse = str_replace('\\', '/', $class);
    $nomeDaClasse = str_replace('app', '..', $nomeDaClasse);
    $nomeDaClasse = $nomeDaClasse . '.php';
    if (file_exists($nomeDaClasse)) {
        require_once $nomeDaClasse;
    }
});