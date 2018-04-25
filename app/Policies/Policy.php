<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function before($user, $ability)
	{
	    //如果用户拥有管理内容的权限，授权通过
        if ($user->can('mange_contents')) {
            return true;
        }
	}
}
