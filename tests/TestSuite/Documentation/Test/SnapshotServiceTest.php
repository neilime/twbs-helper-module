<?php

namespace TestSuite\Documentation\Test;

use Documentation\Test\SnapshotService;
use PHPUnit\Framework\TestCase;

class SnapshotServiceTest extends TestCase
{
    /**
     * @var SnapshotService
     */
    protected $snapshotService;

    protected function setUp(): void
    {
        $this->snapshotService = new SnapshotService('test');
    }

    public function testGetSnapshotIdFromTitle()
    {
        $this->assertEquals('Test__1', $this->snapshotService->getSnapshotIdFromTitle('Test / Test'));
    }
}
