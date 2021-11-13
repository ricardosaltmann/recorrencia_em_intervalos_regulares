<?php

$inicio = new DateTime('2022-11-21'); // Data inicial para a contagem do intervalo
$intervalo = new DateInterval('P4Y'); //P de periodo e 4 para contar 4 anos e Y significa ano
$periodo = new DatePeriod($inicio, $intervalo, '4');

foreach ($periodo as $data) {
    echo $data->format('d/m/y') . PHP_EOL;
}