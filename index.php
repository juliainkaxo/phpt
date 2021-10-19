<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$data = array (
    array ('firstname' => 'Inka' , 'lastname' => 'Remesaho' , 'email' => 'jee.jee@outlook.com'),
    array ('firstname' => 'Inkaaaa' , 'lastname' => 'Remesaho' , 'email' => 'jee.jee@outlook.com'),
    array ('firstname' => 'Inhuihnka' , 'lastname' => 'Remesaho' , 'email' => 'jee.jee@outlook.com'),
    array ('firstname' => 'Inkhkjlka' , 'lastname' => 'Remesaho' , 'email' => 'jee.jee@outlook.com'),
    array ('firstname' => 'Indfghjkka' , 'lastname' => 'Remesaho' , 'email' => 'jee.jee@outlook.com')
);

$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;