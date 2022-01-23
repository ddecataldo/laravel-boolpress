<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** 
     * Relazione 1 a 1
     * Tabella Primaria
    */
    public function userInfo(){
        return $this->hasOne("App\UserInfo");
    }

    /** 
     * Relazione 1 a Molti
     * Tabella Primaria
    */
    public function posts(){ // uso il plurale perchè indica tutti i post di un utente
        return $this->hasMany("App\Post", "author_id"); // il secondo paramentro lo utilizzo per indicare manualmente il nome della tabella contenente l'id, poichè laravel in questo caso si sarebbe aspettato di trovare la colonna user_id
    }
}
