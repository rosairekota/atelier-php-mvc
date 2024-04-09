<?php
use Phalcon\Core\Router;
$router = new Router();


$router->handle($_SERVER['REQUEST_URI']);