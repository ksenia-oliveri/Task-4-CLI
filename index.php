#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use App\Command\Anagram;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new Anagram);

$application->run();
