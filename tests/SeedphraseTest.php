<?php
/**
 * Tests for SeedPhrase
 */

use PHPUnit\Framework\TestCase;
use Seedphrase\Seedphrase;

class SeedphraseTest extends TestCase {
    private Seedphrase $instance;

    protected function setUp(): void {
        $this->instance = new Seedphrase(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Seedphrase::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
