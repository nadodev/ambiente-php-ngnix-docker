<?php
    require_once '../vendor/autoload.php';

    use Core\Teste;

    $teste = new Teste();

    print_r($teste->index());
