<?php

namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class User extends \Illuminate\Database\Eloquent\Model
{
    protected $table='user';
    protected $primaryKey='email';
    public $timestamps = false;

    
    function __construct($pEmail, $pNom, $pPrenom, $pAdresse, $pTel, $pDateNaiss) {
        parent::__construct($attributes);
        $user = new \gamepedia\models\User();
        $user->email = $pEmail;
        $user->nom = $pNom;
        $user->prenom = $pPrenom;
        $user->adresse = $pAdresse;
        $user->tel = $pTel;
        $user->DateNaiss = $pDateNaiss;
        $user->save();
        echo 'user created';
    };

}