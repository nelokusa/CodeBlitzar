<?php
/**
 * Tests for CodeBlitzar
 */

use PHPUnit\Framework\TestCase;
use Codeblitzar\Codeblitzar;

class CodeblitzarTest extends TestCase {
    private Codeblitzar $instance;

    protected function setUp(): void {
        $this->instance = new Codeblitzar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Codeblitzar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
