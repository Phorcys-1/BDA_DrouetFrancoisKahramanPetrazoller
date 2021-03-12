<?php


namespace gamepedia;
use Illuminate\Database\Eloquent\Model;

class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game';
    protected $primaryKey='id';
    public $timestamps = false;

 public function mario() {
     //Game::select('id', 'name') -> where('name', 'like', '%mario%');
     return Game::query()->where('name', 'like', '%Mario%')->get();
 }

}