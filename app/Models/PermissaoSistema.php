<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissaoSistema extends Model
{
    protected $table = 'permissao_sistema';
    protected $primaryKey = 'co_usuario';
    protected $keyType = 'string';
    public $timestamps = false;

    public function caoUsuario()
    {
        return $this->belongsTo(CaoUsuario::class, 'co_usuario', 'co_usuario');
    }
}
