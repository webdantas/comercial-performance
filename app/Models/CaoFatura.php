<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaoFatura extends Model
{
    protected $table = 'cao_fatura';
    protected $primaryKey = 'co_fatura';
    public $timestamps = false;

    protected $fillable = [
        'co_cliente',
        'co_sistema',
        'co_os',
        'num_nf',
        'total',
        'valor',
        'data_emissao',
        'corpo_nf',
        'comissao_cn',
        'total_imp_inc',
    ];

    protected $dates = [
        'data_emissao',
    ];

    public function getValorLiquidoAttribute()
    {
        return $this->valor - ($this->valor * ($this->total_imp_inc / 100));
    }

    public function caoOs()
    {
        return $this->belongsTo(CaoOs::class, 'co_os', 'co_os');
    }
}
