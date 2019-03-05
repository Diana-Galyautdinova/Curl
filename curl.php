<?php

$curl = curl_init("http://sd.test/curlForm.php");

$userAgent = 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0';
curl_setopt( $curl, CURLOPT_USERAGENT, $userAgent );

$form = [
    'name' => 'Diana',
    'surename' => 'Cul',
    'email' => 'gale@mail.ru',
];

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $form);
curl_exec($curl);
curl_close($curl);
