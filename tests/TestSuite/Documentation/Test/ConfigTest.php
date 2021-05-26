<?php

namespace TestSuite\Documentation\Test;

class ConfigTest extends \PHPUnit\Framework\TestCase
{
    public function testFromArrayShouldThrowsAnErrorWhenTitleIsUndefined()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig" does not have a defined "title" key'
        );

        \Documentation\Test\Config::fromArray([]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenRenderingIsNotCallableButString()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'rendering\']" expects a callable value for "test", "string" given'
        );

        \Documentation\Test\Config::fromArray([
            'title' => 'test',
            'rendering' => 'wrong',
        ]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenRenderingIsNotCallableButObject()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'rendering\']" expects a callable value for "test", "stdClass" given'
        );

        \Documentation\Test\Config::fromArray([
            'title' => 'test',
            'rendering' => new \stdClass(),
        ]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenTestsAreNotAnArrayButString()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'tests\']" for "test" expects an array, "string" given'
        );

        \Documentation\Test\Config::fromArray([
            'title' => 'test',
            'tests' => 'wrong',
        ]);
    }

    public function testFromArrayShouldThrowsAnErrorWhenTestsAreNotAnArrayButObkect()
    {
        $this->expectExceptionMessage(
            'Argument "$testConfig[\'tests\']" for "test" expects an array, "stdClass" given'
        );

        \Documentation\Test\Config::fromArray([
            'title' => 'test',
            'tests' => new \stdClass(),
        ]);
    }

    public function testFromArrayShouldHandleTitleFromParentConfig()
    {

        $config = \Documentation\Test\Config::fromArray(
            [
                'title' => 'test',
            ],
            \Documentation\Test\Config::fromArray(['title' => 'parent'])
        );

        $this->assertEquals('parent / test', $config->title);
    }

    public function testFromArrayShouldHandleRendering()
    {
        $rendering = function () {
        };

        $config = \Documentation\Test\Config::fromArray([
            'title' => 'test',
            'rendering' => $rendering,
        ]);

        $this->assertSame($rendering, $config->rendering);
    }

    public function testFromArrayShouldHandleTestChildren()
    {

        $config = \Documentation\Test\Config::fromArray(
            [
                'title' => 'test',
                'tests' => [
                    ['title' => 'child']
                ]
            ],
        );

        $this->assertCount(1, $config->tests);
    }
}
