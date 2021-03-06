<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

    protected $fillable = [
        'phone', 'address', 'cover',
    ];

    protected $table = 'users_info';

    /** 
     * Relazione 1 a 1
     * Tabella Secondaria
    */
    public function user(){
        return $this->belongsTo("App\User");
    }
}
