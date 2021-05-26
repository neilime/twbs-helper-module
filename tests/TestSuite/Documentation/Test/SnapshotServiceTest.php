<?php

namespace TestSuite\Documentation\Test;

class SnapshotServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \Documentation\Test\SnapshotService
     */
    protected $snapshotService;

    protected function setUp(): void
    {
        $this->snapshotService = new \Documentation\Test\SnapshotService('test');
    }

    public function testGetSnapshotIdFromTitle()
    {
        $this->assertEquals('Test__1', $this->snapshotService->getSnapshotIdFromTitle('Test / Test'));
    }
}
