<?php

namespace TestSuite\TwbsHelper\View\Helper\Navigation;

use Laminas\Navigation\Navigation;
use TestSuite\TwbsHelper\AbstractViewHelperTestCase;
use TwbsHelper\View\Helper\Navigation\Breadcrumbs;

class BreadcrumbsTest extends AbstractViewHelperTestCase
{
    /**
     * @var Breadcrumbs
     */
    protected $helper = 'breadcrumbs';

    public function testRenderStraightWithoutActivePage()
    {
        $this->assertSame(
            '<nav aria-label="breadcrumb">' . PHP_EOL .
                '    <ol class="breadcrumb"></ol>' . PHP_EOL .
                '</nav>',
            $this->helper->renderStraight(new Navigation([]))
        );
    }

    public function testRenderStraightWithLinkLast()
    {
        $this->helper->setLinkLast(true);
        $this->assertSame(
            '<nav aria-label="breadcrumb">' . PHP_EOL .
                '    <ol class="breadcrumb">' . PHP_EOL .
                '        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>' . PHP_EOL .
                '        <li aria-current="page" class="active&#x20;breadcrumb-item">Library</li>' . PHP_EOL .
                '    </ol>' . PHP_EOL .
                '</nav>',
            $this->helper->renderStraight(new Navigation([
                [
                    'label' => 'Home', 'uri' => '/', 'pages' => [
                        ['label' => 'Library', 'uri' => '/library', 'active' => true],
                    ],
                ],
            ]))
        );
    }
}
