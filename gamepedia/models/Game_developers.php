<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Game_developers extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game_developers';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * print the name and the desck of gameS corresponding to the companies given
     * @param $company_id the id table of the companies
     */
    public function printGames($company_id) {
        //var_dump($company_id);
        foreach ($company_id as $comp) {

            $res = Game_developers::query()->where('comp_id', '=', $comp["id"])
                ->select('game_id')->get();
            foreach ($res as $game) {
                $name = Game::query()->where("id", "=", $game["game_id"])->select("name")->get();
                echo " - " . $name[0]["name"] . "</br>";
            }
        }

    }

}