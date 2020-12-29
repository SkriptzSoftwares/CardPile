<?php


namespace App\Helpers;


use App\User;

class PermissionsHelper
{

    public function getPerms($neededPerm)
    {
        if (auth()->user()) {
            $builtPerms = [];
            $userPerms = auth()->user()->permissions;
            $roles = auth()->user()->roles()->orderBy('importance', 'ASC')->get();
            if (count($roles) != 0) {
                foreach ($roles as $role) { //Loop through each role the user has, starting with lower priority then finishing with higher priority
                    $splitPerms = explode(';', $role->permissions); //Transform raw text block into a list of permission
                    foreach ($splitPerms as $permission) { //Loop through all perms
                        if (substr($permission, 0, 1) == '-') { //Perm is negative... REMOVE IT
                            $index = array_search(substr($permission, 1), $builtPerms);
                            if ($index !== FALSE) { //Check if perm is in the $builtPerms list to prevent errors
                                unset($builtPerms[$index]); //If it is in the array, remove the perm.
                            }
                        } else { //Perm is positive... you shall give it to him!
                            array_push($builtPerms, $permission); //Giving the perm
                        }
                    }
                }
            }

            //Then calculating user perms
            $splitPerms = explode(';', $userPerms); //Transform raw text block into a list of permission
            foreach ($splitPerms as $permission) { //Loop through all perms
                if (substr($permission, 0, 1) == '-') { //Perm is negative... REMOVE IT
                    $index = array_search(substr($permission, 1), $builtPerms);
                    if ($index !== FALSE) { //Check if perm is in the $builtPerms list to prevent errors
                        unset($builtPerms[$index]); //If it is in the array, remove the perm.
                    }
                } else { //Perm is positive... you shall give it to him!
                    array_push($builtPerms, $permission); //Giving the perm
                }
            }
        } else {
            return false;
        }

        return in_array($neededPerm, $builtPerms) || in_array('ADMIN', $builtPerms);
    }

    public function getPermsOfUser($neededPerm, $user_id)
    {
        if (User::find($user_id) != null) {
            $user = User::find($user_id);
            $builtPerms = [];
            $userPerms = $user->permissions;
            $roles = $user->roles()->orderBy('importance', 'ASC')->get();
            if (count($roles) != 0) {
                foreach ($roles as $role) { //Loop through each role the user has, starting with lower priority then finishing with higher priority
                    $splitPerms = explode(';', $role->permissions); //Transform raw text block into a list of permission
                    foreach ($splitPerms as $permission) { //Loop through all perms
                        if (substr($permission, 0, 1) == '-') { //Perm is negative... REMOVE IT
                            $index = array_search(substr($permission, 1), $builtPerms);
                            if ($index !== FALSE) { //Check if perm is in the $builtPerms list to prevent errors
                                unset($builtPerms[$index]); //If it is in the array, remove the perm.
                            }
                        } else { //Perm is positive... you shall give it to him!
                            array_push($builtPerms, $permission); //Giving the perm
                        }
                    }
                }
            }

            //Then calculating user perms
            $splitPerms = explode(';', $userPerms); //Transform raw text block into a list of permission
            foreach ($splitPerms as $permission) { //Loop through all perms
                if (substr($permission, 0, 1) == '-') { //Perm is negative... REMOVE IT
                    $index = array_search(substr($permission, 1), $builtPerms);
                    if ($index !== FALSE) { //Check if perm is in the $builtPerms list to prevent errors
                        unset($builtPerms[$index]); //If it is in the array, remove the perm.
                    }
                } else { //Perm is positive... you shall give it to him!
                    array_push($builtPerms, $permission); //Giving the perm
                }
            }

            return in_array($neededPerm, $builtPerms) || in_array('ADMIN', $builtPerms);
        }
    }

    public static function instance()
    {
        return new PermissionsHelper();
    }
}
