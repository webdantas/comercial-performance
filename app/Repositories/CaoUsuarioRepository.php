<?php
namespace App\Repositories;

use App\Models\CaoUsuario;

class CaoUsuarioRepository
{
    protected $model;

    public function __construct(CaoUsuario $caoUsuario)
    {
        $this->model = $caoUsuario;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $user = $this->model->find($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = $this->model->find($id);
        return $user->delete();
    }
}
