<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaoUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Add validation rules, e.g.:
            'co_usuario' => 'required|string|max:20|unique:cao_usuario',
            'no_usuario' => 'required|string|max:50',
            'ds_senha' => 'required|string|max:14',
            'co_usuario_autorizacao' => 'nullable|string|max:20',
            'nu_matricula' => 'nullable|integer',
            'dt_nascimento' => 'nullable|date',
            'dt_admissao_empresa' => 'nullable|date',
            'dt_desligamento' => 'nullable|date',
            'dt_inclusao' => 'nullable|date',
            'dt_expiracao' => 'nullable|date',
            'nu_cpf' => 'nullable|string|max:14',
            'nu_rg' => 'nullable|string|max:20',
            'no_orgao_emissor' => 'nullable|string|max:10',
            'uf_orgao_emissor' => 'nullable|string|max:2',
            'ds_endereco' => 'nullable|string|max:150',
            'no_email' => 'nullable|string|max:100',
            'no_email_pessoal' => 'nullable|string|max:100',
            'nu_telefone' => 'nullable|string|max:64',
            'dt_alteracao' => 'nullable|date',
            'url_foto' => 'nullable|string',
            'instant_messenger' => 'nullable|string|max:80',
            'icq' => 'nullable|integer',
            'msn' => 'nullable|string|max:50',
            'yms' => 'nullable|string|max:50',
            'ds_comp_end' => 'nullable|string|max:50',
            'ds_bairro' => 'nullable|string|max:30',
            'nu_cep' => 'nullable|string|max:10',
            'no_cidade' => 'nullable|string|max:50',
            'uf_cidade' => 'nullable|string|max:2',
            'dt_expedicao' => 'nullable|date',
        ];
    }
}