<?php
    $GLOBALS['root'] = dirname(__FILE__);

    require_once '../vendor/autoload.php';

    use App\Classes\Application;
    use App\Classes\Routing\Router;
    use App\Classes\Routing\Route;
    use App\Classes\Controllers\MainController;
    use App\Classes\Controllers\PassportController;
    use App\Classes\Controllers\NewsController;

    $router = new Router();

    $router->addRoute(new Route('/',MainController::class,      'index'));
    $router->addRoute(new Route('/passport', PassportController::class,      'index'));
    //$router->addRoute(new Route('/login', LoginController::class,      'index'));
    $router->addRoute(new Route('/news', NewsController::class,      'index'));
    $router->addRoute(new Route('/news/:id',    NewsController::class,      'single'));
    //$router->addRoute(new Route('/sp', SPController::class,      'index'));
    //$router->addRoute(new Route('/about', AboutController::class,      'index'));


    $app = new Application($router);