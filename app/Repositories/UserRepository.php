<?php

namespace App\Repositories;

use App\Http\Resources\User\UserResource;
use App\Models\User\User;

class UserRepository
{
    public function index(array $request)
    {
        $pagination = $this->setPaginationValue($request);
        $user = User::GetUsersAlphabeticallyWithPagination($pagination);
        return UserResource::collection($user)->response()->getData(true);
    }

    public function search($paginationVal, $data)
    {
        $pagination = $this->setPaginationValue($paginationVal);
        $user = User::SearchUsers($data,$pagination);
        return UserResource::collection($user)->response()->getData(true);
    }

    private function setPaginationValue($pagination)
    {
        return $pagination['per_page'] ?? 10;
    }
}
