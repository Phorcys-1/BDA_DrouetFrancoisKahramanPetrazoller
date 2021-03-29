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

//q2
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
//echo "Jeux de Sony : </br>";
//echo $gd->printGames($c->selectByName("Sony"));






//q2
//echo 'Question 2, Séance 2 : Récupère les personnages dont le nom du jeu commence par Mario :<br></br>';

//foreach ($gameid->getIdByMario() as $value)
//    echo $res->printCharactersName($iddeschara->selectCharacter($value['id']));
//echo 'Question 2, Séance 2 : Récupère les personnages dont le nom du jeu commence par Mario :<br></br>';
//foreach ($gameid->getIdByMario() as $value)
//    echo $res->printCharactersName($iddeschara->selectCharacter($value['id']));
//echo '<br>Fin de la requête... <br></br>';

/*
//q4 variables
$gameidrating = new \gamepedia\models\Game();
$idrating = new \gamepedia\models\Game2rating();
$tmp = new \gamepedia\models\Game2rating();
$idratingboard = new \gamepedia\models\Game_rating();
$nameRatingBoard = new \gamepedia\models\Rating_board();
//q4
echo 'Question 4, Séance 2 : Récupère le rating initial des jeux dont le nom contient Mario :<br></br>';

foreach ($gameidrating->getIdByMario() as $value) {
    $tmp = $idrating->selectRatingID($value['id']);
    $len = $tmp != null ? count($tmp) : 0;
    if($len) {
        echo $nameRatingBoard->selectNameRating($idratingboard->selectRatingBoardId($idrating->selectRatingID($value['id'])));
    }
}
echo '<br></br>Fin de la requête... <br></br>';

*/
/*
//Q5 variables
$lesjeux = new \gamepedia\models\Game();
$listgamemario = new \gamepedia\models\Game2character();
//Q5, Séance 2
echo 'Question 5, Séance 2 : Récupère les jeux dont le nom commence par Mario ou il y a plus de 3 personnages :<br></br>';

foreach ($lesjeux->getIdByMario() as $value) {
    $count = 0;
    if(count($listgamemario->selectGameByNumberChara($value['id'])) > 3)
        echo $value['id']  . '<br></br>';
}
echo '<br></br>Fin de la requête... <br></br>';
*/
/*
//q9
//crée un genre
//$superGenre = new \gamepedia\models\Genre();
//$superGenre->name = "Super Genre";
//$superGenre->deck = "Ces jeux sont vraiment trop bien";
//$superGenre->save();

//verifie si le genre à été crée
//echo( \gamepedia\models\Genre::query()->where("name", "=","Super Genre")->get());

//associe le genre a 12, 56 & 345
/*
foreach ([12,56,345] as $key => $id) {
    $association = new \gamepedia\models\Game2genre();
    $association->game_id = $id;
    $association->genre_id = 51;
    $association->save();
}
//verifie si l'association
echo( "</br>".\gamepedia\models\Game2genre::query()->where("genre_id", "=","51")->get());
*/



/** séance 4 */
//q1
//TODO n° de tel incohérent parfois
/*
echo date('01-01-01');
$u = new \gamepedia\models\User("nom10@prenom.fr", "Nom", "Prenom",
    "1 rue de la ville", 0, date('01-01-2000'));
$u = new \gamepedia\models\User("nom11@prenom.fr", "Nom", "Prenom",
    "1 rue de la ville", 0642, date('01-01-2000'));
$u = new \gamepedia\models\User("nom12@prenom.fr", "Nom", "Prenom",
    "1 rue de la ville", 1234, date('01-01-2000'));
$u = new \gamepedia\models\User("nom13@prenom.fr", "Nom", "Prenom",
    "1 rue de la ville", 0606060606, date('01-01-2000'));


$c = new \gamepedia\models\Commentary("Very good", "this game is very good", date('29-03-2020'),
    date('29-03-2020'),"nom10@prenom.fr",12342);
$c = new \gamepedia\models\Commentary("Very good", "this game is very good", date('29-03-2020'),
    date('29-03-2020'),"nom11@prenom.fr",12342);

echo $c::query()->get();
//TODO Le modèle associé à la table des commentaires doit indiquer que les timestamps seront gérés. ????
*/
echo "</br> Fin fichier  </br>";





