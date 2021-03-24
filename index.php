<?php
/**
 * File:  index.php
 * description: ficindex projet wishlist
 *
 * @author: Jules
 */

//phpinfo();

require_once __DIR__ . '/vendor/autoload.php';
use  Illuminate\Database\Capsule\Manager as DB;
use gamepedia\models\Game as Game;
use gamepedia\database\Eloquent as Eloquent;


echo 'init'.'<br>';

$db = new DB();
print ("eloquent installé".'<br>');
/*
$db->addConnection([
    'driver' => 'mysql',
    'host' => 'root',
    'database' => 'gamepedia',
    'username' => 'gamepedia',
    'password' => 'gp2021',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);
*/
$db->setAsGlobal();
$db->bootEloquent();
print ("connecté a la base".'<br>');


Eloquent::start(__DIR__.'/gamepedia/conf/conf.ini.dist');

$g = new Game();
$c = new \gamepedia\models\Company();
$p = new \gamepedia\models\Platform();
$g2c = new \gamepedia\models\Game2character();
$ch = new \gamepedia\models\Character();
$gd = new \gamepedia\models\Game_developers();

//Séance 2 ex2
$gameid = new \gamepedia\models\Game();
$iddeschara = new \gamepedia\models\Game2character();
$res = new \gamepedia\models\Character();


/** séance 1 */
//q1
//var_dump($g->mario());
//q2
//echo "Compagnies japonaises : </br> ".$c->japon();
//q3
//echo "Platforme vendus plus de 10 000 000 de fois : </br> ".$p->baseInstalle();
//q4
//echo "442 jeux a partir du 21173 : </br>";
//$g->quatrequatredeux();
//q5
//echo($g->JeuxPaginer());


/** séance 2 */
//q1
//echo $ch->printCharacters($g2c->selectCharacter(12342));

//q3
echo "Jeux de Sony : </br>";
echo $gd->printGames($c->selectByName("Sony"));




echo 'Fin fichier <br> </br>';

//q2
echo 'Question 2, Séance 2 : Récupère les personnages dont le nom du jeu commence par Mario :<br></br>';
foreach ($gameid->getIdByMario() as $value)
    echo $res->printCharactersName($iddeschara->selectCharacter($value['id']));
echo '<br></br>Fin de la requête... <br></br>';






