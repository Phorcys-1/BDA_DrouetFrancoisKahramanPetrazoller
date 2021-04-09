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

//q2
//echo 'Question 2, Séance 2 : Récupère les personnages dont le nom du jeu commence par Mario :<br></br>';

//foreach ($gameid->getIdByMario() as $value)
//    echo $res->printCharactersName($iddeschara->selectCharacter($value['id']));
//echo 'Question 2, Séance 2 : Récupère les personnages dont le nom du jeu commence par Mario :<br></br>';
//foreach ($gameid->getIdByMario() as $value)
//    echo $res->printCharactersName($iddeschara->selectCharacter($value['id']));
//echo '<br>Fin de la requête... <br></br>';

//q3
//echo "Jeux de Sony : </br>";
//echo $gd->printGames($c->selectByName("Sony"));

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
//Q6 variables
$jeux = new \gamepedia\models\Game();
$idrating = new \gamepedia\models\Game2rating();
$tmp = new \gamepedia\models\Game2rating();
$idratingboard = new \gamepedia\models\Game_rating();
$res = new \gamepedia\models\Game2rating();
$r = new \gamepedia\models\Game();

//Q6, Séance 2
echo 'Question 6, Séance 2 : Récupère les jeux dont le nom commence par Mario ou le rating initial contient "3+" :<br></br>';

foreach ($jeux->getIdByMario() as $value) {
    $tmp = $idrating->selectRatingID($value['id']);
    $len = $tmp != null ? count($tmp) : 0;
    if($len) {
        $idratingboard->selectNameBy3plus($idrating->selectRatingID($value['id']));
        if(!empty($idratingboard->selectNameBy3plus($idrating->selectRatingID($value['id'])))){
            foreach ($idratingboard->selectNameBy3plus($idrating->selectRatingID($value['id'])) as $val) {
                $res->selectIDInGame2($val['id']);
                if(!empty($res->selectIDInGame2($val['id'])))
                foreach ($res->selectIDInGame2($val['id']) as $va) {
                    echo $r->getJeuxByMario($va['game_id']);
                }
            }
        }
    }
}

echo '<br></br>Fin de la requête... <br></br>';


//Q7 variables
$ljeux = new \gamepedia\models\Game();
$ljeuxInc = new \gamepedia\models\Game_publishers();
$lcomp = new \gamepedia\models\Company();
$jeremonte = new \gamepedia\models\Game_publishers();
$idrating2 = new \gamepedia\models\Game2rating();
$idratingboard2 = new \gamepedia\models\Game_rating();
$res2 = new \gamepedia\models\Game2rating();
$r2 = new \gamepedia\models\Game();
$tmpq73 = new \gamepedia\models\Game2rating();
$tmpq7 = new \gamepedia\models\Game_publishers();
$tmpq72 = new \gamepedia\models\Company();
//Q7
echo 'Question 7, Séance 2 : Récupère les jeux dont le nom commence par Mario ou le rating initial contient "3+" et la compagnie contient "Inc" :<br></br>';

foreach ($ljeux->getIdByMario() as $value) {
    $tmpq7 = $ljeuxInc->selectComp_idByGame_id($value['id']);
    $len = $tmpq7 != null ? count($tmpq7) : 0;
    if ($len) {
        $ljeuxInc->selectComp_idByGame_id($value['id']);
        foreach ($ljeuxInc->selectComp_idByGame_id($value['id']) as $val) {
            $tmpq72 = $lcomp->selectIDByNAME($val['comp_id']);
            $len2 = $tmpq72 != null ? count($tmpq72) : 0;
            if($len2) {
                echo $lcomp->selectIDByNAME($val['comp_id']);
            }
        }
    }
}

foreach ($ljeux->getIdByMario() as $value) {
    $tmpq7 = $ljeuxInc->selectComp_idByGame_id($value['id']);
    $len = $tmpq7 != null ? count($tmpq7) : 0;
    if ($len) {
        $ljeuxInc->selectComp_idByGame_id($value['id']);
        foreach ($ljeuxInc->selectComp_idByGame_id($value['id']) as $val) {
            $tmpq72 = $lcomp->selectIDByNAME($val['comp_id']);
            $len2 = $tmpq72 != null ? count($tmpq72) : 0;
            if($len2) {
                echo $lcomp->selectIDByNAME($val['comp_id']);
                $lcomp->selectIDByNAME($val['comp_id']);
                foreach ($lcomp->selectIDByNAME($val['comp_id']) as $va) {
                    $jeremonte->selectGame_IdByComp_id($va['id']);
                    foreach($jeremonte->selectGame_IdByComp_id($va['id']) as $v) {
                        $tmpq73 = $idrating2->selectRatingID($v['game_id']);
                        $len3 = $tmpq73 != null ? count($tmpq73) : 0;
                        if($len3) {
                            $idratingboard2->selectNameBy3plus($idrating2->selectRatingID($v['game_id']));
                            if(!empty($idratingboard2->selectNameBy3plus($idrating2->selectRatingID($v['game_id'])))){
                                foreach ($idratingboard2->selectNameBy3plus($idrating2->selectRatingID($v['game_id'])) as $valuue) {
                                    $res2->selectIDInGame2($valuue['id']);
                                    if(!empty($res2->selectIDInGame2($valuue['id'])))
                                        foreach ($res2->selectIDInGame2($valuue['id']) as $valuuue) {
                                            echo $r2->getJeuxByMario($valuuue['game_id']);
                                        }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

echo '<br></br>Fin de la requête... <br></br>';




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


/** séance 3 */
/** Partie 1 */
/** Ressources */

//1

/* $req1  = new \gamepedia\models\Game();
 * echo microtime() . "<br>";
echo $req1->listjeux();
echo microtime();
//0.03733400 a se connecter a la base
//0.86492700 a executer la requête
echo '<br>';
*/
//2
/*
$req2 = new \gamepedia\models\Game();
echo microtime() . "<br>";
echo $req2->mario();
echo microtime();
//0.03733400 a se connecter a la base
//0.86492700 a executer la requête
echo '<br>';
echo '<br>';
//0.09201800
//0.29329300
*/
//3
/*
$char = new \gamepedia\models\Character();
$game = new \gamepedia\models\Game();
$g2c = new \gamepedia\models\Game2character();
echo microtime() . "<br>";
foreach ($gameid->getIdByMario() as $value)
     $res->printCharactersName($iddeschara->selectCharacter($value['id']));
foreach ($gameid->getIdByMario() as $value)
    echo "<br>";
     $res->printCharactersName($iddeschara->selectCharacter($value['id']));
echo microtime();
//0.06469600 a se connecter a la base
//0.86029000 a executer la requête
echo '<br>';
*/
//4
/*
$jeuxTD3 = new \gamepedia\models\Game();
$idratingTD3 = new \gamepedia\models\Game2rating();
$tmpTD3 = new \gamepedia\models\Game2rating();
$idratingboardTD3 = new \gamepedia\models\Game_rating();
$resTD3 = new \gamepedia\models\Game2rating();
$rTD3 = new \gamepedia\models\Game();
echo microtime() . "<br>";
foreach ($jeuxTD3->getIdByMario() as $value) {
    $tmpTD3 = $idratingTD3->selectRatingID($value['id']);
    $len = $tmpTD3 != null ? count($tmpTD3) : 0;
    if($len) {
        $idratingboardTD3->selectNameBy3plus($idratingTD3->selectRatingID($value['id']));
        if(!empty($idratingboardTD3->selectNameBy3plus($idratingTD3->selectRatingID($value['id'])))){
            foreach ($idratingboardTD3->selectNameBy3plus($idratingTD3->selectRatingID($value['id'])) as $val) {
                $resTD3->selectIDInGame2($val['id']);
                if(!empty($resTD3->selectIDInGame2($val['id'])))
                    foreach ($resTD3->selectIDInGame2($val['id']) as $va) {
                        $rTD3->getJeuxByMario($va['game_id']);
                    }
            }
        }
    }
}
echo microtime();
//0.06469600 a se connecter a la base
//0.86029000 a executer la requête
echo '<br>';
//0.85721400
//0.47867200
*/
/**Index*/

//1
/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', 'Mario%')->get();
echo microtime();
*/
//0.91422700
//0.11486800
/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', 'Land%')->get();
echo microtime();
//0.45636000
//0.68407300
*/
/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', 'The Real%')->get();
echo microtime();
//0.16123700
//0.43677100
*/

//2
/*
 * ALTER TABLE `game` ADD INDEX( `name`);
 */

//3
/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', 'Mario%')->get();
echo microtime();
//0.21289500
//0.27190100
*/
/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', 'Land%')->get();
echo microtime();
//0.70433900
//0.75262000
*/

/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', 'The Real%')->get();
echo microtime();
//0.55853200
//0.57775800
*/



/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', '%Mario%')->get();
echo microtime();
//0.48599000
//0.74089200
*/
/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', '%Land%')->get();
echo microtime();
//0.38924700
//0.65760000
*/
/*
echo microtime(). '<br>';
$res = Game::query()->where('name', 'like', '%The Real%')->get();
echo microtime();
//0.34494900
//0.59351900
*/


// Plus de temps d'exécution car il doit approfondir ses recherches



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

$u = new \gamepedia\models\User("nom16@prenom.fr", "Nom", "Prenom",
    "1 rue de la ville", 0606060606, date('01-01-2000'));


/*
$c = new \gamepedia\models\Commentary("Very good", "this game is very good", date('29-03-2020'),
    date('29-03-2020'),"nom10@prenom.fr",12342);
$c = new \gamepedia\models\Commentary("Very good", "this game is very good", date('29-03-2020'),
    date('29-03-2020'),"nom11@prenom.fr",12342);

echo $c::query()->get();
//TODO Le modèle associé à la table des commentaires doit indiquer que les timestamps seront gérés. ????
*/

//Partie 2 faker :
$faker = Faker\Factory::create();
//utilisateur aleatoire
$u = new \gamepedia\models\User($faker->email(), $faker->lastName(),
    $faker->firstName(), $faker->address(), $faker->phoneNumber(),
    $faker->dateTimeBetween('1900-01-01', '2010-12-31')->format('m/d/Y'));

//commentaire aleatoire
$commEmail =\gamepedia\models\User::all()->random(1)[0]{"email"};
$commGame = \gamepedia\models\Game::all()->random(1)[0]{"id"};
$c = new \gamepedia\models\Commentary($faker->text(), $faker->text(),
    $faker->dateTimeBetween('1900-01-01', '2010-12-31')->format('m/d/Y'),
    $faker->dateTimeBetween('1900-01-01', '2010-12-31')->format('m/d/Y'),
    $commEmail, $commGame);

echo "</br> Fin fichier  </br>";




