<?php

namespace App\Policies;

use App\User;
use App\bikes;
use Illuminate\Auth\Access\HandlesAuthorization;

class bikesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the bikes.
     *
     * @param  \App\User  $user
     * @param  \App\bikes  $bikes
     * @return mixed
     */
    public function view(User $user, bikes $bikes)
    {
        return true; // if authenticated return true
    }

    /**
     * Determine whether the user can create bikes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true; // if authenticated return true
    }

    /**
     * Determine whether the user can update the bikes.
     *
     * @param  \App\User  $user
     * @param  \App\bikes  $bikes
     * @return mixed
     */
    public function update(User $user, bikes $bikes)
    {
        if($bikes->owner_id == $user->id){
            return true;
        }else{
            abort(403, 'Unauthorized action, you are not the owner.');
        }
    }

    /**
     * Determine whether the user can delete the bikes.
     *
     * @param  \App\User  $user
     * @param  \App\bikes  $bikes
     * @return mixed
     */
    public function delete(User $user, bikes $bikes)
    {
        if($bikes->owner_id == $user->id){
            return true; 
        }else{
            abort(403, 'Unauthorized action, you are not the owner.');
        }
    }
}
