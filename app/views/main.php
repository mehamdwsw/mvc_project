<?php
namespace App\views;

use App\core\Router;
require_once("./vendor/autoload.php");

// if(empty($_GET)){
//     include("./app/views/auth/login.php");
// }
Router::dispatcher();

