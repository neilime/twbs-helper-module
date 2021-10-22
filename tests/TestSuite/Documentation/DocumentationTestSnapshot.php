<?php

namespace TestSuite\Documentation;

class DocumentationTestSnapshot
{
    private static $SNAPSHOT_ROOT_DIRECTORY = __DIR__ . DIRECTORY_SEPARATOR . '__snapshots__';

    public static function getSnapshotPathFromTitle($title): string
    {
        $pathFromTitle = str_replace(' / ', DIRECTORY_SEPARATOR, $title);
        $safePath = preg_replace('/[^\/A-Za-z0-9-]+/', '_', $pathFromTitle);

        return static::$SNAPSHOT_ROOT_DIRECTORY . DIRECTORY_SEPARATOR . $safePath;
    }
}
