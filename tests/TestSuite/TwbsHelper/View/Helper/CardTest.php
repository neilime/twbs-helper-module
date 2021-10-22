<?php

namespace TestSuite\TwbsHelper\View\Helper;

class CardTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{

    /**
     * @var \TwbsHelper\View\Helper\Card
     */
    protected $helper = 'card';

    public function testRenderCardHeaderNavWithoutContainer()
    {
        $this->expectExceptionMessage(
            "nav['container'] is undefined"
        );
        $this->helper->__invoke(['nav' => ['wrong' => false]]);
    }

    public function testRenderCardHeaderNavWithGivenAttributes()
    {
        $this->assertSame(
            // Expected
            '<div class="card">' . PHP_EOL .
                '    <div class="card-header&#x20;test-class">' . PHP_EOL .
                '        <ul class="card-header-tabs&#x20;nav&#x20;nav-tabs">' . PHP_EOL .
                '            <li class="&#x20;nav-item">' . PHP_EOL .
                '                <a class="nav-link&#x20;active" href="&#x23;">Active</a>' . PHP_EOL .
                '            </li>' . PHP_EOL .
                '        </ul>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
            // Rendering
            $this->helper->__invoke(['nav' => [
                [
                    ['label' => 'Active', 'uri' => '#', 'active' => true,],
                ],
                ['class' => 'test-class']

            ]])
        );
    }

    public function testRenderCardOverlayWithoutImg()
    {
        $this->expectExceptionMessage(
            "overlay['img'] is undefined"
        );
        $this->helper->__invoke(['overlay' => ['wrong' => false]]);
    }

    public function testRenderCardItemWithoutImg()
    {
        $this->expectExceptionMessage(
            'Card item "wrong" is not supported'
        );
        $this->helper->__invoke(['wrong' => ['wrong' => false]]);
    }
}
