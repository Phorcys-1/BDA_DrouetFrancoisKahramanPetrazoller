<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Game2genre extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'game2genre';
    protected $primaryKey = 'id';
    public $timestamps = false;

}

