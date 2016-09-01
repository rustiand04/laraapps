<?php

namespace App\Repositories;

use App\User;
use App\Teacher;

class TeacherRepository
{
	public function forUser(User $user)
	{
		return $user->teachers()->orderBy('create_at', 'asc')->get();
	}
}