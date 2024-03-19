<?php
namespace routes;
class Router {

    function __construct()

    {
        include "routes/routes.php;}

    private $routes = [];
    
      @param string $route URI  ('home' 'products').
      @param string $handler ('HomeController@index').
     
    public function addRoute($route, $handler) {
        $this->routes[$route] = $handler;
    }
    public function handle($route) {
        if (isset($this->routes[$route])) {
            $handler = $this->routes[$route];
            $this->callHandler($handler);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Страница не найдена!";
        }
    }
    @param string $handler ('HomeController@index').
    private function callHandler($handler) {
        list($controller, $method) = explode('@', $handler);

        $className="\\controllers\\{$controller}";
        $controllerObject = new $className;

        $controllerObject->$method();
    }
}
?>
