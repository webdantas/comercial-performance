<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\CaoFatura;

class CaoFaturaTest extends TestCase
{
    public function testGetValorLiquidoAttribute()
    {
        $caoFatura = new CaoFatura([
            'valor' => 100,
            'total_imp_inc' => 10,
        ]);
        $this->assertEquals(90, $caoFatura->valor_liquido);
    }

    public function testCaoOsRelationship()
    {
        $caoFatura = new CaoFatura();
        $relation = $caoFatura->caoOs();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class, $relation);
        $this->assertEquals('co_os', $relation->getForeignKeyName());
        $this->assertEquals('cao_os.co_os', $relation->getQualifiedForeignKeyName());
    }
}
