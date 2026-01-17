<?php
namespace App\controllers;

use App\models\Repository\UserRepository;
use App\models\User;

class AuthControllers{
    public static function indix_login(){
    include_once("./app/views/auth/login.php");
    }
    public static function indix_register(){
    include_once("./app/views/auth/register.php");
    }
    public static function login(User $User){
        // UserRepository::create($User);
        echo"login";
    }
    public static function register(User $User){
        return UserRepository::create($User);
    }
}