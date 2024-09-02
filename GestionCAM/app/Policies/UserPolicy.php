<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return in_array($user->fk_rol, [1, 2, 4]); // Administrador, Dojo-Cho, Shihan
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model)
    {
        return in_array($user->fk_rol, [1, 2, 4]) || $user->id === $model->id; // Administrador, Dojo-Cho, Shihan o el propio usuario
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return in_array($user->fk_rol, [1, 2, 4]); // Administrador, Dojo-Cho, Shihan
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model)
    {
        return in_array($user->fk_rol, [1, 2, 4]) || $user->id === $model->id; // Administrador, Dojo-Cho, Shihan o el propio usuario
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model)
    {
        return in_array($user->fk_rol, [1, 2, 4]); // Administrador, Dojo-Cho, Shihan
    }

    /**
     * Determine whether the user can assign roles.
     */
    public function assignRoles(User $user)
    {
        return in_array($user->fk_rol, [1, 2, 4]); // Administrador, Dojo-Cho, Shihan
    }
}