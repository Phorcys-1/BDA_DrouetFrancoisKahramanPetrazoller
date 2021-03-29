<?php

namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class User extends \Illuminate\Database\Eloquent\Model
{
    protected $table='user';
    protected $primaryKey='email';
    public $timestamps = false;
    protected $dates =['dateNaiss'];


    function __construct(){
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
    function __construct6($pEmail, $pNom, $pPrenom, $pAdresse, $pTel, $pDateNaiss) {
        //$user = parent::__construct();
        $user = new User();
        $user->email = $pEmail;
        $user->nom = $pNom;
        $user->prenom = $pPrenom;
        $user->adresse = $pAdresse;
        $user->tel = $pTel;
        $user->dateNaiss = $pDateNaiss;
        $user->save();
        echo 'user created';
    }

}