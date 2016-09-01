<?php

namespace App\Repositories;

use App\User;
use App\Student;

class StudentRepository
{
	public function forUser(User $user)
	{
		return $user->students()->orderBy('created_at', 'asc')->get();
	}
}