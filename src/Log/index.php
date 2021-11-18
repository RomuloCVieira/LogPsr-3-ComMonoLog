<?php

declare(strict_types=1);

require_once '../../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger(name: 'log-psr-3');
$log->pushHandler(
    handler: new StreamHandler(
        stream: '../../tmp/meu.log',
        level: Logger::WARNING
    )
);

$log->warning(message: 'Este erro é so um aviso');
$log->critical(message: 'Banco de dados fora');