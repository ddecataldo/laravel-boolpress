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
        'category_id', 
        'published', 
        'imageUrl',
    ];

    /** 
     * Relazione 1 a Molti
     * Tabella Secondaria
    */
    public function user(){
        return $this->belongsTo("App\User", "author_id");
        // ForeignKey "author_id"
    }

    /** 
     * Relazione Molti a Molti
    */
    public function tags(){ // uso il plurale perchè indica tutti i post di un utente
        return $this->belongsToMany("App\Tag");
    }

}