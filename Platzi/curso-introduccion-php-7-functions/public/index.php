<?php
//Funciona psr7 moveiendo loss archovos a la raiz de htdocs
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use App\Controllers\IndexController;
use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
  'driver'    => 'mysql',
  'host'      => 'localhost',
  'database'  => 'cursophp',
  'username'  => 'root',
  'password'  => '',
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
]);
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
  $_SERVER,
  $_GET,
  $_POST,
  $_COOKIE,
  $_FILES
);

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();
$map->get('index', '/', [
  'controller' => 'App\Controllers\IndexController',
  'action' => 'indexAction'
]);

$map->get('addJobs', '/jobs/add',[
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJoobAction'
]);

$map->post('saveJobs', '/jobs/add',[
  'controller' => 'App\Controllers\JobsController',
  'action' => 'getAddJoobAction'
]);

function printElement( $el) {
  // if($job->visible == false) {
  //   return;
  //}
  echo '<li class="work-position">';
  echo '<h5>' . $el->title . '</h5>';
  echo '<p>' . $el->description . '</p>';
  echo '<p>' . $el->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route) {
  // get the first of the best-available non-matched routes
  echo ('No hay ruta');
} else {
  $handlerData = $route->handler;
  $controllerName = $handlerData['controller'];
  $actionName =  $handlerData['action'];

  $controller = new $controllerName;
  $response = $controller->$actionName($request);
  echo $response->getBody();
}
