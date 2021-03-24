<?php


namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Company extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'company';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Japon() {
        $res =  Company::query()->where('location_country', '=', 'Japan')
            ->select('name')->get();
        foreach ($res as $company){
            echo " - ".$company["name"]."</br>";
        }
    }

    public function selectByName($name) {
        $res =  Company::query()->where('name', 'like',"%$name%")
            ->select('id')->get();
        /*
        foreach ($res as $char){
            echo " - ".$char["character_id"]."</br>";
        }
        */
        return $res;
    }

}