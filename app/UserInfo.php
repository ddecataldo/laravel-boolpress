<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    /** 
     * Relazione 1 a 1
     * Tabella Secondaria
    */
    public function user(){
        return $this->belongsTo("App\User");
    }
}
