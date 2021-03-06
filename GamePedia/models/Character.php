<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Character extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'Character';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * print the name and the desck of characterS given
     * @param $character_id the id table
     */
    public function printCharacters($character_id) {
        foreach ($character_id as $char){
            $res =  Character::query()->where('id', '=', $char["character_id"])
                ->select('name', 'deck')->get();
            echo " - ".$res[0]["name"]." : </br>".$res[0]["deck"]."</br>";
        }


    }

    public function printCharactersName($character_id) {
        foreach ($character_id as $char){
            $res =  Character::query()->where('id', '=', $char["character_id"])
                ->select('name', 'first_appeared_in_game_id')->get();
            echo " - Nom du personnage : ".$res[0]["name"].", apparu dans le jeu : ".$res[0]["first_appeared_in_game_id"]."</br>";
        }

    }

}