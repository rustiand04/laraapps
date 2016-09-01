<?php

namespace App\Repositories;

use App\User;
use App\Employee;

class EmployeeRepository
{
	public function forUser(User $user)
	{
		return $user->employees()->orderBy('created_at', 'asc')->get();
	}
}