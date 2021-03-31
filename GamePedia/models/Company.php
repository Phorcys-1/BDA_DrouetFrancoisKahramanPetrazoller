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

    /**
     * retourne la liste des company contenant le nom donné en paramètre
     * @param $name
     * @return un tableau d'id de company
     */
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

    /**
     * retourne la liste des id des companies contenant Inc
     * @param
     * @return les id des compagnies qui possèdes Inc dans leur nom
     */
    public function selectIDByInc($comp_id) {
        $res =  Company::query()->select('id')->where('id','=', $comp_id)->get();
        return $res;
    }

    public function selectIDByNAME(int $comp_id) {
        $res = Company::query()->select('id')->where('id', '=', $comp_id)->where('name', 'like', '%Inc%')->get();
        return $res;
    }



}