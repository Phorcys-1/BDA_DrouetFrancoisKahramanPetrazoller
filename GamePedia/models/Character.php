<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Character extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'Character';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function printCharacters($character_id) {
        foreach ($character_id as $char){
            $res =  Character::query()->where('id', '=', $char["character_id"])
                ->select('name', 'deck')->get();
            echo " - ".$res[0]["name"]." : </br>".$res[0]["deck"]."</br>";
        }


        }

}