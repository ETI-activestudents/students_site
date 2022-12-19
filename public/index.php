<?php
    $GLOBALS['root'] = dirname(__FILE__);

    require_once '../vendor/autoload.php';

    use App\Classes\Application;
    use App\Classes\Routing\Router;
    use App\Classes\Routing\Route;
    use App\Classes\Controllers\MainController;
    use App\Classes\Controllers\PassportController;

    $router = new Router();

    $router->addRoute(new Route('/', MainController::class,      'index'));
    $router->addRoute(new Route('/passport', PassportController::class,      'index'));
    //$router->addRoute(new Route('/news/:id/user/:user_id',    NewsController::class,      'userView'));

    $app = new Application($router);