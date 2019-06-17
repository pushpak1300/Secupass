<?php

namespace App\Policies;

use App\User;
use App\accounts;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any accounts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the accounts.
     *
     * @param  \App\User  $user
     * @param  \App\accounts  $accounts
     * @return mixed
     */
    public function view(User $user, accounts $accounts)
    {
        return $accounts->owner_id==$user->id;
    }

    /**
     * Determine whether the user can create accounts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the accounts.
     *
     * @param  \App\User  $user
     * @param  \App\accounts  $accounts
     * @return mixed
     */
    public function update(User $user, accounts $accounts)
    {
        //
    }

    /**
     * Determine whether the user can delete the accounts.
     *
     * @param  \App\User  $user
     * @param  \App\accounts  $accounts
     * @return mixed
     */
    public function delete(User $user, accounts $accounts)
    {
        //
    }

    /**
     * Determine whether the user can restore the accounts.
     *
     * @param  \App\User  $user
     * @param  \App\accounts  $accounts
     * @return mixed
     */
    public function restore(User $user, accounts $accounts)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the accounts.
     *
     * @param  \App\User  $user
     * @param  \App\accounts  $accounts
     * @return mixed
     */
    public function forceDelete(User $user, accounts $accounts)
    {
        //
    }
}
