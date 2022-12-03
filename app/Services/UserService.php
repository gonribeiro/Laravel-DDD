<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{
    protected $repo;

    public function __construct(UserRepositoryInterface $repo)
    {
        return $this->repo = $repo;
    }

    public function store(array $data)
    {
        return $this->repo->store($data);
    }

    public function getList()
    {
        return $this->repo->getList();
    }

    public function get(int $id)
    {
        return $this->repo->get($id);
    }

    public function update(array $data, int $id)
    {
        return $this->repo->update($data, $id);
    }

    public function destroy(int $id)
    {
        return $this->repo->destroy($id);
    }
}
