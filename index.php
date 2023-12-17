#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use App\Command\MyCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new MyCommand);

$application->run();
