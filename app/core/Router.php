<?php

namespace App\core;

use App\controllers\LoginControllers;
use App\controllers\ErreurControllers;
use App\controllers\AccueilControllers;
use App\controllers\RegisterControllers;



include_once("./vendor/autoload.php");
class Router
{
    public static function dispatcher()
    {
        if (empty($_GET)) {
            include_once("./app/views/Accueil.php");
        } else {
            $controllers = array_keys($_GET)[0];
        }
        $new = new self();
        $new->controllers($controllers);
    }
    public function controllers($kay)
    {
        switch ($kay) {
            case 'Accueil':
                AccueilControllers::indix();
                break;
            case 'Login':
                LoginControllers::indix();
                break;
            case 'Register':
                RegisterControllers::indix();
                break;
            default: {
                    ErreurControllers::indix();
                }
        }
    }
}
