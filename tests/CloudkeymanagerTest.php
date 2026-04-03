<?php
/**
 * Tests for CloudKeyManager
 */

use PHPUnit\Framework\TestCase;
use Cloudkeymanager\Cloudkeymanager;

class CloudkeymanagerTest extends TestCase {
    private Cloudkeymanager $instance;

    protected function setUp(): void {
        $this->instance = new Cloudkeymanager(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cloudkeymanager::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
