<?php


namespace gamepedia;
use Illuminate\Database\Eloquent\Model;

class Platform extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'platform';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function baseInstalle()
    {
        $res = Platform::query()->where('install_base', '>=', '10000000')
            ->select('name')->get();
        foreach ($res as $pt) {
            echo " - " . $pt["name"] . "</br>";
        }
    }
}
