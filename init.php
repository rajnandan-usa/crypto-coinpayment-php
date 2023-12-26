<?php

require "Coin.php";
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => "mysql",
    'host' => "localhost",
    'database' => "ad220219_donator",
    'username' => "root",
    'password' => ""
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

require "Payment.php";

$coin = new CoinPaymentsAPI();
$coin->Setup("9349ffd6dbf615f6a33b449f9f3cc8ad4446deba657e4f5d2f5a67111959a2c2","9701767a45648F580b3d4e92ab25F2bcef15D02338ea4f4A1D6560bB263BF094");