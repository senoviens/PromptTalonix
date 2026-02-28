<?php
/**
 * Tests for PromptTalonix
 */

use PHPUnit\Framework\TestCase;
use Prompttalonix\Prompttalonix;

class PrompttalonixTest extends TestCase {
    private Prompttalonix $instance;

    protected function setUp(): void {
        $this->instance = new Prompttalonix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Prompttalonix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
