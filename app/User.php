<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','condicion','persona_id'
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

    public $timestamps = false;

    public function roles(){
        return $this->belongsToMany(Rol::class, 'assigned_roles', 'user_id','role_id');
    }

    public function persona(){
        return $this->belongsTo(Persona::class, 'id');
    }

    /**
     * Metodo que verifica si el rol actual de la sesion equivale
     * a uno de los roles que se pasa por parametro
     * @param array $roles roles a los ue el usuario puede acceder
     * @return bool true si el rol actual conincide con los parametros, false si no es compatible
     */
    public function hasRoles(Array $roles){

        foreach ($roles as $role){
            if($role === $this->role->nombre){
                return true;
            }else{
                return false;
            }
        }
    }
}
