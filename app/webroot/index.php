<?php

require dirname(__DIR__) . '/config/bootstrap.php';

echo arthur\action\Dispatcher::run(new arthur\action\Request());