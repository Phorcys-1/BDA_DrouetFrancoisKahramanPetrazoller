<?php


namespace gamepedia;
use Illuminate\Database\Eloquent\Model;

class Game extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game';
    protected $primaryKey='id';

 public function mario() {
     Game::select('id', 'name') -> where('name', 'like', '%mario%');

 }

}