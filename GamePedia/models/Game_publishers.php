<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Game_publishers extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'Game_publishers';
    protected $primaryKey = 'game_id';
    public $timestamps = false;

    /**
     * Select comp_id by game_id
     * @param $game_id int the id of the rating
     * @return the id of all the games corresponding to the game_id
     */
    public function selectComp_idByGame_id(int $game_id) {
        $res = Game_publishers::query()->select('comp_id')->where('game_id', '=', $game_id)->get();
        return $res;
    }

    public function selectGame_IdByComp_id(int $id) {
        $res = Game_publishers::query()->select('game_id')->where('comp_id', '=', $id)->get();
        return $res;
    }


}