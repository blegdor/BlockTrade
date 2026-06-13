<?php
/**
 * Tests for BlockTrade
 */

use PHPUnit\Framework\TestCase;
use Blocktrade\Blocktrade;

class BlocktradeTest extends TestCase {
    private Blocktrade $instance;

    protected function setUp(): void {
        $this->instance = new Blocktrade(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocktrade::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
