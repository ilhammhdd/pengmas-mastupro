<?php
/**
 * Created by PhpStorm.
 * User: milha
 * Date: 11/20/2017
 * Time: 4:08 PM
 */

namespace App;


trait CheckRole
{
    public function hasRole(Role $role)
    {
        return $role->user()->get()->contains($role);
    }

    public function roles()
    {
        return $this->role()->get();
    }

    public static function findUserByRole(Role $role)
    {
        return $role->user()->get();
    }
}