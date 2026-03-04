<?php
/**
 * Tests for SmartLedger
 */

use PHPUnit\Framework\TestCase;
use Smartledger\Smartledger;

class SmartledgerTest extends TestCase {
    private Smartledger $instance;

    protected function setUp(): void {
        $this->instance = new Smartledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
