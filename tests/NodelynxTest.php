<?php
/**
 * Tests for NodeLynx
 */

use PHPUnit\Framework\TestCase;
use Nodelynx\Nodelynx;

class NodelynxTest extends TestCase {
    private Nodelynx $instance;

    protected function setUp(): void {
        $this->instance = new Nodelynx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodelynx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
