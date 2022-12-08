<?php

namespace App\Repositories;

use App\Http\Resources\User\UserResource;
use App\Models\User\User;

class UserRepository
{
    public function index(array $request)
    {
        $pagination = isset($request['per_page']) ? $request['per_page'] : 10;
        $user = User::GetUsersAlphabeticallyWithPagination($pagination);
        return UserResource::collection($user)->response()->getData(true);
    }
}
