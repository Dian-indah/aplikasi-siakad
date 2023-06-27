<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Kelas;
use Illuminate\Auth\Access\HandlesAuthorization;

class KelasPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Admin $admin, Kelas $kelas)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Admin $admin, Kelas $kelas)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Admin $admin, Kelas $kelas)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Admin $admin, Kelas $kelas)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Admin  $admin
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Admin $admin, Kelas $kelas)
    {
        //
    }
}
