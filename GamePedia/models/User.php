<?php

namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class User extends \Illuminate\Database\Eloquent\Model
{
    protected $table='user';
    //protected $primaryKey='email';
    public $timestamps = false;
    protected $dates =['dateNaiss'];

    /**
     code sql table user :
    CREATE table user (
    email Varchar (50),
    Nom VARCHAR(50),
    Prenom VARCHAR(50),
    Adresse VARCHAR(100),
    Tel integer(100),
    DateNaiss date,
    PRIMARY KEY (email)
    );
     */

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