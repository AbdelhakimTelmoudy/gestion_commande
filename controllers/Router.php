<?php
class Router
{
    private $_ctrl;
    private $_view;

    public function routeReq()
    {
        try {

            spl_autoload_register(function ($class) {
                require_once('models/' . $class . '.php');
            });
            $url = "";

            if (isset($_SERVER['REQUEST_URI'])) {
                $url = explode('/', filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[2]));
                $controllerClass = "Controller" . $controller;
                $controllerFile = "controllers/" . $controllerClass . ".php";

                if (file_exists($controllerFile)) {
                    require_once $controllerFile;
                    $this->_ctrl = new $controllerClass($url);
                } else {
                    require_once 'controllers/ControllerAccueil.php';
                    $this->_ctrl = new ControllerAccueil($url);
                }
            } else {
                throw new Exception('Page interouvable !!!');
            }
        } catch (Exception $e) {
            $errorMsg = $e->getMessage();
            require_once 'views/viewError.php';
        }
    }
}
