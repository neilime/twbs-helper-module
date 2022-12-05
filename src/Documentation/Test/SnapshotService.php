<?php

namespace Documentation\Test;

class SnapshotService
{
    private static $SNAPSHOT_ROOT_DIRECTORY = '__snapshots__';

    private $testsDirectoryPath;

    public function __construct(string $testsDirectoryPath)
    {
        $this->testsDirectoryPath = $testsDirectoryPath;
    }

    public function getSnapshotIdFromTitle(string $title, $incrementor = 1): string
    {
        return basename($this->getSnapshotPathFromTitle($title, $incrementor), '.html');
    }

    public function getSnapshotPathFromTitle(string $title, $incrementor = 1): string
    {
        $pathFromTitle = str_replace(' / ', DIRECTORY_SEPARATOR, $title);
        $safePath = preg_replace('/[^\/A-Za-z0-9-]+/', '_', $pathFromTitle);

        $snapshotFile = $safePath . '__' .  $incrementor . '.html';

        return $this->testsDirectoryPath . DIRECTORY_SEPARATOR .
            self::$SNAPSHOT_ROOT_DIRECTORY . DIRECTORY_SEPARATOR . $snapshotFile;
    }
}
