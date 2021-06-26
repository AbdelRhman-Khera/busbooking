<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    public $table = 'users';




    public $fillable = [
        'name',
        'role_id',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role_id' => 'integer',
        'email' => 'string',
        'password' => 'string',
        'email_verified_at' => 'datetime',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'role_id' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class,'role_id');
    }
}
