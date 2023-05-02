<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\CaoSalario;

class CaoSalarioTest extends TestCase
{
    public function testCaoUsuarioRelationship()
    {
        $caoSalario = new CaoSalario();
        $relation = $caoSalario->caoUsuario();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class, $relation);
        $this->assertEquals('co_usuario', $relation->getForeignKeyName());
        $this->assertEquals('cao_usuario.co_usuario', $relation->getQualifiedForeignKeyName());
    }
}
