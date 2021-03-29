<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Game_rating extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game_rating';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Select rating_board_id by id
     * @param $rating_id int the id of the game
     * @return the rating_board_id of all the ratings corresponding to the rating_ID
     */
    public function selectRatingBoardId($rating_id) {
        $res =  Game_rating::query()->select('rating_board_id')->where('id', '=', $rating_id[0]['rating_id'])->get();
        return $res;
    }

}