<?php
// require __DIR__ . '/vendor/autoload.php';

// $dotenv = new Dotenv\Dotenv(__DIR__);
// $dotenv->load();

echo '<br>'. 'SECRET_KEY (getenv): ' . getenv('SECRET_KEY');
echo '<br>'. 'SECRET_KEY ($_SERVER): ' . $_SERVER['SECRET_KEY'];
echo '<br>'. 'SECRET_KEY ($_ENV): '. $_ENV['SECRET_KEY'];

phpinfo();
print_r($_SERVER);
// echo $secret_key;
