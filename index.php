<?php

// Kickstart the framework
$f3=require('lib/base.php');

// Load configuration
$f3->config('config.ini');
$f3->config('routes.ini');

//Run framework
$f3->run();
