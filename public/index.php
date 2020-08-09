<?php

require __DIR__.'/../vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('../storage/logs/app.log', Monolog\Logger::INFO));
$log->addInfo($_SERVER['REMOTE_ADDR'].' '.gethostname());

echo '<h1>Hello World - And one more thing...</h1>';
echo '<pre>'.print_r($log, true).'</pre>';
