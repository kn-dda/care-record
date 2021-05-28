<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /*
    //RegisterControllerにも同じコーディングあり
    User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'birthday' => $data['birthday'],
        'password' => Hash::make($data['password']),
    ]);
    */
        
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'birthday', 'password',
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
    
    public function user_condition()
    {
        return $this->hasMany(UserCondition::class);
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount('user_conditions');
    }
    
}
