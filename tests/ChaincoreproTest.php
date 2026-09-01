<?php
/**
 * Tests for ChainCorePro
 */

use PHPUnit\Framework\TestCase;
use Chaincorepro\Chaincorepro;

class ChaincoreproTest extends TestCase {
    private Chaincorepro $instance;

    protected function setUp(): void {
        $this->instance = new Chaincorepro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincorepro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
