<?php

namespace DocumentationGenerator\UsagePage\Prettifier;

class SourceFile extends \PHP_CodeSniffer\Files\DummyFile
{
    public function getContent()
    {
        return $this->content;
    }
}
