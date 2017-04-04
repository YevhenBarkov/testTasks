<?php
require_once '../bootstrap.php';
session_start();
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

$locator = new FileLocator(array(__DIR__));
$loader = new YamlFileLoader($locator);
$routes = $loader->load('routes.yml');

$context = new RequestContext($_SERVER['PATH_INFO']);

$matcher = new UrlMatcher($routes, $context);
$parameters=null;
try {
    $parameters = $matcher->match($_SERVER['PATH_INFO']);
} catch (Exception $e){
    echo $e;
}
if (!is_null($parameters)) {
    $controller = new $parameters['_controller']($parameters, $entityManager);
    $action = $parameters['_route'];
    if (method_exists($controller, $action)) {
        $controller->$action();
    }
}

//$tmp = new MyController();
//$tmp->checkAction();
