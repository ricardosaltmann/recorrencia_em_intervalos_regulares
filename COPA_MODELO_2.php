<?php

$fim = new DateTime('2028-11-22');
$inicio = new DateTime('2022-11-21'); // Data inicial para a contagem do intervalo
$intervalo = new DateInterval('P4Y'); //P de periodo e 4 para contar 4 anos e Y significa ano
$periodo = new DatePeriod($inicio, $intervalo, $fim);

foreach ($periodo as $data) {
    echo $data->format('d/m/y') . PHP_EOL;
}
