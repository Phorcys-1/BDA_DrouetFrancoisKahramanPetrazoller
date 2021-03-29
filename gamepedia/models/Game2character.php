<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Game2character extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game2character';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Select character by gameID
     * @param $game_id int the id of the game
     * @return the id of all the characters corresponding to the gameID
     */
    public function selectCharacter($game_id) {
        $res =  Game2character::query()->where('game_id', '=', $game_id)
            ->select('character_id')->get();
        /*
        foreach ($res as $char){
            echo " - ".$char["character_id"]."</br>";
        }
        */
        return $res;
    }


}