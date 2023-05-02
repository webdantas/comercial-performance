<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\CaoOs;

class CaoOsTest extends TestCase
{
    public function testCaoUsuarioRelationship()
    {
        $caoOs = new CaoOs();
        $relation = $caoOs->caoUsuario();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class, $relation);
        $this->assertEquals('co_usuario', $relation->getForeignKeyName());
        $this->assertEquals('cao_usuario.co_usuario', $relation->getQualifiedForeignKeyName());
    }

    public function testCaoFaturasRelationship()
    {
        $caoOs = new CaoOs();
        $relation = $caoOs->caoFaturas();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasMany::class, $relation);
        $this->assertEquals('co_os', $relation->getForeignKeyName());
        $this->assertEquals('cao_fatura.co_os', $relation->getQualifiedForeignKeyName());
    }
}
