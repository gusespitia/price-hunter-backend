<?php

require 'vendor/autoload.php';

use Knuckles\Scribe\Tools\Generator;
use Knuckles\Scribe\ScribeServiceProvider;

$generator = new Generator();
$generator->generateDocs();
