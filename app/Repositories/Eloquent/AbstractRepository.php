<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function getList()
    {
        return $this->model->orderBy('id', 'desc')->get();
    }

    public function get(int $id)
    {
        return $this->model->find($id);
    }

    public function update(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy(int $id)
    {
        return $this->model->find($id)->delete();
    }
}
