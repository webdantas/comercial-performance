<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\CaoUsuario;

class CaoUsuarioTest extends TestCase
{
    public function testPermissaoSistemaRelationship()
    {
        $caoUsuario = new CaoUsuario();
        $relation = $caoUsuario->permissaoSistema();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasMany::class, $relation);
        $this->assertEquals('co_usuario', $relation->getForeignKeyName());
        $this->assertEquals('permissao_sistema.co_usuario', $relation->getQualifiedForeignKeyName());
    }
    public function testCaoOsRelationship()
    {
        $caoUsuario = new CaoUsuario();
        $relation = $caoUsuario->caoOs();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasMany::class, $relation);
        $this->assertEquals('co_usuario', $relation->getForeignKeyName());
        $this->assertEquals('cao_os.co_usuario', $relation->getQualifiedForeignKeyName());
    }

    public function testCaoSalarioRelationship()
    {
        $caoUsuario = new CaoUsuario();
        $relation = $caoUsuario->caoSalario();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasOne::class, $relation);
        $this->assertEquals('co_usuario', $relation->getForeignKeyName());
        $this->assertEquals('cao_salario.co_usuario', $relation->getQualifiedForeignKeyName());
    }
}