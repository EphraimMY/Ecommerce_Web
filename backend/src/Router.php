<?php
namespace App;

use AltoRouter;

class Router{
    private $router;
    private $viewPath;
    public function __construct($viewPath)
    {
        $this->viewPath = $viewPath;
        $this->router = new AltoRouter();
    }

    public function get($url, $view, $name = null): self
    {
        $this->router->map('GET', $url, $view, $name);
        return $this;
    }

    public function post($url, $view, $name = null): self 
    {
        $this->router->map('POST', $url, $view, $name);
        return $this;
    }

    public function put ($url, $view, $name = null): self
    {
        $this->router->map('PUT', $url, $view, $name);
        return $this;
    }

    public function delete($url, $view, $name = null): self
    {
        $this->router->map('DELETE', $url, $view, $name);
        return $this;
    }


    public function run(){
        $match = $this->router->match();
        if(!empty($match['target'])){
            $view = $match['target'];
            $params = $match['params'];
            require $this->viewPath . '/' . $view . '.php';
        }else{
            echo '404';
        }
    }
}