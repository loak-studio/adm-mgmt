<?php

namespace App\Policies;

use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(): bool
    {
        return Auth::user()->is_admin;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(): bool
    {
        return Auth::user()->is_admin;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(): bool
    {
        return Auth::user()->is_admin;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(): bool
    {
        return Auth::user()->is_admin;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(): bool
    {
        return Auth::user()->is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(): bool
    {
        return Auth::user()->is_admin;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(): bool
    {
        return Auth::user()->is_admin;
    }
}