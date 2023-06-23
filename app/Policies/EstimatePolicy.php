<?php

namespace App\Policies;

use App\Models\Estimate;
use App\Models\User;

class EstimatePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Estimate $estimate): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Estimate $estimate): bool
    {
        if ($estimate->trashed() && ! $user->is_admin) {
            return false;
        }

        if (($estimate->status == 'signed' || $estimate->status == 'refused') && ! $user->is_admin) {
            return false;
        }

        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Estimate $estimate): bool
    {
        if ($estimate->status != 'creation' && ! $user->is_admin) {
            return false;
        }

        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Estimate $estimate): bool
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Estimate $estimate): bool
    {
        return $user->is_admin;
    }
}