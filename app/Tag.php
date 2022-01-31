<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** 
     * Relazione Molti a Molti
    */
    public function posts(){ // uso il plurale perchè indica tutti i post di un utente
        return $this->belongsToMany("App\Post");
    }
}
