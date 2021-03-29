<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Rating_board extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'Rating_board';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Select name by id
     * @param $rating_board_id int the id of the rating
     * @return the name of all the ratings_board corresponding to the id
     */
    public function selectNameRating($rating_board_id) {
        $res = Rating_board::query()->select('name')->where('id', '=', $rating_board_id[0]['rating_board_id'])->get();
        return $res;
    }

}