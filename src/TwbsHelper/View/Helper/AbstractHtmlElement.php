<?php

namespace TwbsHelper\View\Helper;

use Laminas\I18n\Translator\TranslatorAwareInterface;

class AbstractHtmlElement extends \Laminas\View\Helper\AbstractHtmlElement implements TranslatorAwareInterface
{
    use \Laminas\I18n\Translator\TranslatorAwareTrait;
}
