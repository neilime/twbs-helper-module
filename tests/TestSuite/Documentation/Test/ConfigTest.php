<?php

namespace TestSuite\Documentation\Test;

use Documentation\Test\Config;
use PHPUnit\Framework\TestCase;
use stdClass;

class ConfigTest extends TestCase
{
    public function testFromArrayShouldThrowsAnErrorWhenTitleIsUndefined()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig" does not have a defined "title" key'
        );

        Config::fromArray([]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenRenderingIsNotCallableButString()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'rendering\']" expects a callable value for "test", "string" given'
        );

        Config::fromArray([
            'title' => 'test',
            'rendering' => 'wrong',
        ]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenRenderingIsNotCallableButObject()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'rendering\']" expects a callable value for "test", "stdClass" given'
        );

        Config::fromArray([
            'title' => 'test',
            'rendering' => new stdClass(),
        ]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenTestsAreNotAnArrayButString()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'tests\']" for "test" expects an array, "string" given'
        );

        Config::fromArray([
            'title' => 'test',
            'tests' => 'wrong',
        ]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenTestsAreNotAnArrayButObkect()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'tests\']" for "test" expects an array, "stdClass" given'
        );

        Config::fromArray([
            'title' => 'test',
            'tests' => new stdClass(),
        ]);
    }

    public function testFromArrayShouldHandleTitleFromParentConfig()
    {

        $config = Config::fromArray(
            [
                'title' => 'test',
            ],
            Config::fromArray(['title' => 'parent'])
        );

        $this->assertEquals('parent / test', $config->title);
    }

    public function testFromArrayShouldHandleRendering()
    {
        $rendering = function () {
        };

        $config = Config::fromArray([
            'title' => 'test',
            'rendering' => $rendering,
        ]);

        $this->assertSame($rendering, $config->rendering);
    }

    public function testFromArrayShouldHandleTestChildren()
    {

        $config = Config::fromArray(
            [
                'title' => 'test',
                'tests' => [
                    ['title' => 'child'],
                ],
            ],
        );

        $this->assertCount(1, $config->tests);
    }
}
