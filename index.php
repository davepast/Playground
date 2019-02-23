<?php

$credentials = ["login" => ["login1", "login2", "login3"], "password" => ["password1", "password2", "password3"]];
$numbers = [1, 2, 3, 4, 5, 6];
$sum = 0;


for ($i = 0; $i < count($credentials["login"]) && $i < count($credentials["password"]); ++$i) {
    $login = $credentials["login"][$i];
    $password = $credentials["password"][$i];

    echo("Login: $login, password: $password <br>");
}

echo ("Nový součet $sum <br>");

foreach ($numbers as $number) {
    echo (" Nové číslo: $number <br>");
    $sum += $number;
    echo ("Nový součet: $sum <br>");

}