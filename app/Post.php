<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\ForeignKeyDefinition;

class Post extends Model
{
    protected $fillable = [
        'title', 
        'content', 
        'author', 
        'category', 
        'published', 
        'imageUrl',
    ];

    /** 
     * Relazione 1 a Molti
     * Tabella Secondaria
    */
    public function user(){ // uso il plurale perchè indica tutti i post di un utente
        return $this->belongsTo("App\User", "author_id");
        // ForeignKey "author_id"
        // ownerKey "id"
    }

}