<?php

namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Game2rating extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game2rating';
    protected $primaryKey = 'game_id';
    public $timestamps = false;

    /**
     * Select rating_id by game_id
     * @param $game_id int the id of the game
     * @return the rating_id of all the games corresponding to the gameID
     */
    public function selectRatingID($game_id) {
        $res =  Game2rating::query()->select('rating_id')->where('game_id', '=', $game_id)->get();
        return $res;
    }

}