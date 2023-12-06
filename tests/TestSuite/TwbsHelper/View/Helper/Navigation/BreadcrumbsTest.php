<?php

namespace TestSuite\TwbsHelper\View\Helper\Navigation;

class BreadcrumbsTest extends \TestSuite\TwbsHelper\AbstractViewHelperTestCase
{
    /**
     * @var \TwbsHelper\View\Helper\Navigation\Breadcrumbs
     */
    protected $helper = 'breadcrumbs';

    public function testRenderStraightWithoutActivePage()
    {
        $this->assertSame(
            '<nav aria-label="breadcrumb">' . PHP_EOL .
                '    <ol class="breadcrumb"></ol>' . PHP_EOL .
                '</nav>',
            $this->helper->renderStraight(new \Laminas\Navigation\Navigation([]))
        );
    }

    public function testRenderStraightWithLinkLast()
    {
        $this->helper->setLinkLast(true);
        $this->assertSame(
            '<nav aria-label="breadcrumb">' . PHP_EOL .
                '    <ol class="breadcrumb">' . PHP_EOL .
                '        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>' . PHP_EOL .
                '        <li class="breadcrumb-item active" aria-current="page">' .
                '<a href="&#x2F;library" aria-current="page">Library</a>' .
                '</li>' . PHP_EOL .
                '    </ol>' . PHP_EOL .
                '</nav>',
            $this->helper->renderStraight(new \Laminas\Navigation\Navigation([
                [
                    'label' => 'Home', 'uri' => '/', 'pages' => [
                        ['label' => 'Library', 'uri' => '/library', 'active' => true],
                    ],
                ],
            ]))
        );
    }
}
