<?php

$form = [
    'name' => $_POST['name'],
    'surename' => $_POST['surename'],
    'email' => $_POST['email'],
];

file_put_contents('File.txt', $form);
