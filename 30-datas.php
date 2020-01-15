<?php
// Datas
echo "<h3>Data</h3>";
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/y H:i:s');
echo "<hr>";

$date = date('Y-m-d'); // Date
echo $date;
echo "<hr>";
$datetime = date('Y-m-d H:m:s'); // Datetime
echo $datetime;
echo "<hr>";

// TIME
echo "<h3>Time</h3>";
echo time();
echo "<br>";

echo "<p>Time formatado</p>";
$time = time();
echo date('d/m/y', $time);
echo "<hr>";

// MKTIME
echo "<h3>MKTIME</h3>";
echo "<p>Data de pagamento</p>";
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/y - h:i', $data_pagamento);
echo "<hr>";

// STRTOTIME
echo "<h3>STRTOTIME</h3>";
echo "<p>Convert o valor de uma string</p>";
$data = '2019-04-10 13:30:00';
$data = strtotime($data);
echo date('d/m/y', $data);
