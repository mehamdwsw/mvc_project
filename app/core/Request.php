<?php
namespace App\core;

use App\models\User;
use App\controllers\AuthControllers;




class Request{
    public static function Post(){

    if($_POST['submit']=="register"){
    $User=new User($_POST["username"],$_POST["email"],$_POST["password"]);
    echo AuthControllers::register($User); 
    exit();
    }

    if($_POST['submit']=="login"){
    echo"lol";
    $User=new User("",$_POST["email"],$_POST["password"]);
    AuthControllers::login($User);
    exit();
    }

    
    }
}
