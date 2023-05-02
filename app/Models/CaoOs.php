<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaoOs extends Model
{
    protected $table = 'cao_os';
    protected $primaryKey = 'co_os';
    public $timestamps = false;

    public function caoUsuario()
    {
        return $this->belongsTo(CaoUsuario::class, 'co_usuario', 'co_usuario');
    }

    public function caoFaturas()
    {
        return $this->hasMany(CaoFatura::class, 'co_os', 'co_os');
    }
}
