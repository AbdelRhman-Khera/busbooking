<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version June 25, 2021, 11:55 pm UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'role_id',
        'email',
        'password'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    public function createuser(Request $request )
    {

        $input = $request->all();
        $input['password'] =Hash::make($request['password']);


        return $this->create($input);
    }
    public function updateuser(Request $request , $id )
    {
// dd($request,$id);
        $input = $request->all();
        $input['password'] =Hash::make($request['password']);

        return $this->update($input, $id);
    }
}
