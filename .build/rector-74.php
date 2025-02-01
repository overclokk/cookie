<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\DowngradeLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        // We need to go up one level to get to the root of the package
        // So we can omit declaring the path on the vendor/bin/rector process
        __DIR__ . '/../src',
        __DIR__ . '/../examples.php',
    ])
    ->withSets([
        DowngradeLevelSetList::DOWN_TO_PHP_74,
    ]);
