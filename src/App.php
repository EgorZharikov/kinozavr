<?php
namespace App;

use App\Http\Request;
use App\Router\Router;

class App 
{
    public function run(): void
    {
        $router = new Router();
        $request = Request::createFromGlobals();
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $router->dispatch($uri, $method);

    }
}