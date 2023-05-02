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

    public function getAllWithPermissaoSistema()
    {
        return CaoUsuario::join('cao_salario', 'cao_usuario.co_usuario', '=', 'cao_salario.co_usuario')
            ->join('cao_os', 'cao_usuario.co_usuario', '=', 'cao_os.co_usuario')
            ->join('cao_fatura', 'cao_os.co_os', '=', 'cao_fatura.co_os')
            ->whereHas('permissaoSistema', function ($query) {
                $query->where('co_sistema', 1)
                    ->whereIn('co_tipo_usuario', [0, 1, 2])
                    ->where('in_ativo', 'S');
            })
            ->with(['caoOs' => function ($query) {
                $query->with(['caoFaturas' => function ($query) {
                    $query->select(['co_os', 'co_fatura', 'valor', 'total_imp_inc', 'comissao_cn']);
                }]);
            }])
            ->select([
                'cao_usuario.*',
                'cao_salario.brut_salario',
                \DB::raw('SUM(cao_fatura.valor * cao_fatura.total_imp_inc * cao_fatura.comissao_cn / 10000) AS comissao')
            ])
            ->groupBy('cao_usuario.co_usuario');
    }

    public function getAllWithPermissaoSistemaAndComissao()
    {
        return CaoUsuario::join('cao_salario', 'cao_usuario.co_usuario', '=', 'cao_salario.co_usuario')
            ->join('cao_os', 'cao_usuario.co_usuario', '=', 'cao_os.co_usuario')
            ->join('cao_fatura', 'cao_os.co_os', '=', 'cao_fatura.co_os')
            ->whereHas('permissaoSistema', function ($query) {
                $query->where('co_sistema', 1)
                    ->whereIn('co_tipo_usuario', [0, 1, 2])
                    ->where('in_ativo', 'S');
            })
            ->with(['caoOs' => function ($query) {
                $query->with(['caoFaturas' => function ($query) {
                    $query->select(['co_os', 'co_fatura', 'valor', 'total_imp_inc', 'comissao_cn']);
                }]);
            }])
            ->selectRaw('cao_usuario.*, cao_salario.brut_salario, SUM(cao_fatura.valor * cao_fatura.total_imp_inc * cao_fatura.comissao_cn / 10000) AS comissao')
            ->groupBy('cao_usuario.co_usuario')
            ->get();
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
