<?php

namespace Documentation\Test\Snapshots\Drivers;

class HtmlDriver extends \Spatie\Snapshots\Drivers\HtmlDriver
{
    public function serialize(mixed $data): string
    {
        $serializedData = str_replace("—", "&mdash;", $data);
        $serializedData = parent::serialize($serializedData);

        return preg_replace('~<(?:!DOCTYPE|/?(?:html|head|body))[^>]*>\s*~i', '', $serializedData);
    }

    public function match($expected, $actual): void
    {
        // Canonicalize saved HTML with the current libxml serializer too.
        parent::match($this->serialize($expected), $actual);
    }

    public function extension(): string
    {
        return 'html';
    }
}
