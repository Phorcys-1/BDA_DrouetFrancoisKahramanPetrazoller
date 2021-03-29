<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Genre extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id';
    public $timestamps = false;

}

