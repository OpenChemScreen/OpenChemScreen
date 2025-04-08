<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProjectPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Project $project): bool
    {
        $permissions = $user->Projects()->find($project->getKey())->pivot->permissions;
        if ($permissions) {
            $permissions = json_decode($permissions, true);
            if (in_array('view', $permissions)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Project $project): bool
    {
        $permissions = $user->Projects()->find($project->getKey())->pivot->permissions;
        if ($permissions) {
            $permissions = json_decode($permissions, true);
            if (in_array('update', $permissions)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Project $project): bool
    {
        $permissions = $user->Projects()->find($project->getKey())->pivot->permissions;
        if ($permissions) {
            $permissions = json_decode($permissions, true);
            if (in_array('delete', $permissions)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Project $project): bool
    {
        $permissions = $user->Projects()->find($project->getKey())->pivot->permissions;
        if ($permissions) {
            $permissions = json_decode($permissions, true);
            if (in_array('restore', $permissions)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Project $project): bool
    {
        $permissions = $user->Projects()->find($project->getKey())->pivot->permissions;
        if ($permissions) {
            $permissions = json_decode($permissions, true);
            if (in_array('force_delete', $permissions)) {
                return true;
            }
        }

        return false;
    }
}
