<?php

namespace gamepedia\models;
use Illuminate\Database\Eloquent\Model;

class Commentary extends \Illuminate\Database\Eloquent\Model
{
    protected $table='commentary';
    //protected $primaryKey='posted_by','posted_on';
    public $timestamps = true;
    //protected $dates =['updated_at', 'created_at'];

    /**
    code sql table commentary :
    CREATE table commentary (
    Title Varchar (50),
    Content VARCHAR(100),
    Created_at date,
    updated_at date,
    posted_by varchar(50),
    posted_on int(11),
    primary key (posted_by, posted_on)
    );
     */

    function __construct(){
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
    function __construct6($pTitle, $pContent, $pCreated_at, $pUpdated_at, $pPosted_by, $pPosted_on) {
        //$user = parent::__construct();
        $comm = new Commentary();
        $comm->title = $pTitle;
        $comm->content = $pContent;
        $comm->created_at = $pCreated_at;
        //$comm->updated_at = $pUpdated_at;
        $comm->posted_by = $pPosted_by;
        $comm->posted_on = $pPosted_on;
        $comm->save();
        echo '$comm created';
    }
    

}