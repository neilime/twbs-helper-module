<?php

namespace TwbsHelper\View\Helper;

use Laminas\I18n\Translator\TranslatorAwareInterface;
use Laminas\I18n\Translator\TranslatorAwareTrait;

class AbstractHtmlElement extends \Laminas\View\Helper\AbstractHtmlElement implements TranslatorAwareInterface
{
    use TranslatorAwareTrait;
}
