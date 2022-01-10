<?php

namespace TestSuite\TwbsHelper\View\Helper;

class GridTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\Grid
     */
    protected $helper = 'grid';

    public function testRenderGridWithoutRow()
    {
        $this->assertSame(
            // Expected
            '<div class="container"></div>',
            // Rendering
            $this->helper->__invoke([])
        );
    }

    public function testRenderGridWithRows()
    {
        $this->assertSame(
            // Expected
            '<div class="container">' . PHP_EOL .
                '    <div class="row">' . PHP_EOL .
                '        <div class="col">' . PHP_EOL .
                '            Row 1 - Column 1' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="col-md-2">' . PHP_EOL .
                '            Row 1 - Column 2' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '    <div class="row">' . PHP_EOL .
                '        <div class="col">' . PHP_EOL .
                '            Row 2 - Column 1' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '        <div class="col-md-2">' . PHP_EOL .
                '            Row 2 - Column 2' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            // Rendering
            $this->helper->__invoke([
                [
                    [
                        [
                            'Row 1 - Column 1',
                        ],
                        [
                            'Row 1 - Column 2',
                            ['column' => 'md-2'],
                        ],
                    ]
                ],
                [
                    [
                        [
                            'Row 2 - Column 1',
                        ],
                        [
                            'Row 2 - Column 2',
                            ['column' => 'md-2'],
                        ],
                    ]
                ],
            ])
        );
    }
}
