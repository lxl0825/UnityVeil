<?php
/**
 * Tests for UnityVeil
 */

use PHPUnit\Framework\TestCase;
use Unityveil\Unityveil;

class UnityveilTest extends TestCase {
    private Unityveil $instance;

    protected function setUp(): void {
        $this->instance = new Unityveil(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Unityveil::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
