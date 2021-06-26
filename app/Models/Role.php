<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Role
 * @package App\Models
 * @version June 25, 2021, 11:26 pm UTC
 *
 * @property string $name
 */
class Role extends Model
{



    public $table = 'roles';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }

}
