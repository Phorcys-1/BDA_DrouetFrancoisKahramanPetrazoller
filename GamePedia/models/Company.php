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

}