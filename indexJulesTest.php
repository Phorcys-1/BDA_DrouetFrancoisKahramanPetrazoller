<?php
/**
 * File:  index.php
 * description: ficindex projet wishlist
 *
 * @author: canals
 */

//phpinfo();

require_once __DIR__ . '/vendor/autoload.php';
use  Illuminate\Database\Capsule\Manager as DB;
use gamepedia\Game;
use gamepedia\database\Eloquent as Eloquent;
use Slim\App;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

echo 'init'.'<br>';

$db = new DB();
print ("eloquent installé".'<br>');

$db->addConnection([
    'driver' => 'mysql',
    'host' => 'root',
    'database' => 'gamepedia',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);

$db->setAsGlobal();
$db->bootEloquent();
print ("connécté a la base".'<br>');


Eloquent::start(__DIR__.'/gamepedia/conf/conf.ini.dist');

$g = new Game();
echo $g->mario();

//$app = new \Slim\App();
$c = new Container(['settings'=>['displayErrorDetails'=>true]]);


$app = new App($c);


/*test slim hello world */
$app->get('/hello/{name}',
    function (Request $req, Response $resp, $args) {
        $name = $args['name'];
        $resp->getBody()->write("Hello, $name");
        return $resp;
    }
);



$app->run();


