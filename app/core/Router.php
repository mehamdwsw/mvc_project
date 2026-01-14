<?php
namespace App\core;

class Router{
    public static function dispatcher(){
        echo "<pre>";
        // var_dump($_SERVER);
        echo "</pre>";
        $uri = $_SERVER["REQUEST_URI"];
        var_dump($uri);
         $new = new self();
        $response = $new->resolveURI($uri);
        var_dump($response);
        // $new->execute($response);
    }
    public function resolveURI($uri){
        $uriArray = explode('/', $uri);
        $controller = $uriArray[1];
        $method = $uriArray[2];
        

        $controller = ucfirst($controller) .'Controller';
        // var_dump($controller);

        return [
            'controller'=> $controller,
            'method' => $method
        ];
    }
}