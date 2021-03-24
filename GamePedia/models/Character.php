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
            $res =  Character::query()->where('id', '=', $char)
                ->select('id', 'deck')->get();
            echo " - ".$res."</br>";
        }


        }

}