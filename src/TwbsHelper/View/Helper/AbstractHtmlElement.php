<?php

namespace TwbsHelper\View\Helper;

use Zend\I18n\Translator\TranslatorAwareInterface;

class AbstractHtmlElement extends \Zend\View\Helper\AbstractHtmlElement implements TranslatorAwareInterface
{
    use \Zend\I18n\Translator\TranslatorAwareTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;
}
