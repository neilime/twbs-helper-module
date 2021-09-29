<?php

namespace DocumentationGenerator;

trait BootstrapVersionTrait
{
    private static $BOOTSTRAP_VERSION = 'BOOTSTRAP_VERSION';

    private function getBootstrapVersion()
    {
        return getenv(static::$BOOTSTRAP_VERSION);
    }
}
