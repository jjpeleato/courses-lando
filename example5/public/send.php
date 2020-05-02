<?php
declare(strict_types=1);

$mail   = 'jjpeleato@gmail.com';
$header = 'From: ' . $mail . PHP_EOL;
$header .= 'MIME-Version: 1.0' . PHP_EOL;
$header .= 'Content-type: text/html; charset=utf-8';

mail(
    $mail,
    'foo',
    'bar',
    $header,
    '-f' . $mail
);
