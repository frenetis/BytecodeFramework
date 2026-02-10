<?php
/**
 * Tests for Bytecode
 */

use PHPUnit\Framework\TestCase;
use Bytecode\Bytecode;

class BytecodeTest extends TestCase {
    private Bytecode $instance;

    protected function setUp(): void {
        $this->instance = new Bytecode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bytecode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
