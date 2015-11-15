<?php

use Vendas\Carro;
//Exemplo usando apelido use Vendas\Carro as vendaCarro;

require_once 'Fabrica/Carro.php';
require_once 'Vendas/Carro.php';

$carro = new Carro();

echo $carro->acao();