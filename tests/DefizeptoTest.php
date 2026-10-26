<?php
/**
 * Tests for DefiZepto
 */

use PHPUnit\Framework\TestCase;
use Defizepto\Defizepto;

class DefizeptoTest extends TestCase {
    private Defizepto $instance;

    protected function setUp(): void {
        $this->instance = new Defizepto(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defizepto::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
