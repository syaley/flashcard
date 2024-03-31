<?php
require_once('dbconfig.php');
require_once dirname(__DIR__) . '/functions/database.fn.php';
$db = getPdoLink($config);
$test = 'test';