<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaoSalario extends Model
{
    use HasFactory;

    protected $table = 'cao_salario';

    protected $fillable = [
        'co_usuario',
        'dt_alteracao',
        'brut_salario',
        'liq_salario',
        'desconto',
        'liquido',
        'dt_pagamento',
    ];
}
