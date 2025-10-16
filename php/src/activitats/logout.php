<?php
require_once '../../vendor/autoload.php';
use App\SessionAuth;
SessionAuth::start();
SessionAuth::logout();
header('Location: login.php');
exit;
