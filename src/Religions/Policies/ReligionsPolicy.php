<?php

namespace Myrtle\Core\Religions\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReligionsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

	public function admin(User $user)
	{
		return $user->allPermissions->contains(function ($ability, $key)
		{
			return $ability->name === 'religions.admin';
		});
	}
}
