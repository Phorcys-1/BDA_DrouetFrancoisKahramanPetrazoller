<?php


namespace gamepedia;
use Illuminate\Database\Eloquent\Model;

class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game';
    protected $primaryKey='id';
    public $timestamps = false;

 public function mario() {
     return Game::query()->where('name', 'like', '%Mario%')->get();
 }

 public function quatrequatredeux(){
     $res =  Game::query()->offset(21173)->limit(442)
     ->select('name')
     ->get();

     foreach ($res as $jeu){
         echo " - ".$jeu["name"]."</br>";
     }
}
public function JeuxPaginer() {
     $nPage= 1;
     Game::select('name', 'deck')
        ->chunk(500, function ($pages) use ($nPage) {
            echo " <b>Page</b> ".$nPage." : </br>";
            foreach ($pages as $pageJeu) {
                echo $pageJeu."</br>";
                $nPage +=1;
            }
        });
}
    //return Game::query()->with('name', 'deck')->get();



}