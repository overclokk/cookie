<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    // uncomment to reach your current PHP version
    ->withPhpSets()
//    ->withTypeCoverageLevel(0)
//    ->withDeadCodeLevel(0)
//    ->withCodeQualityLevel(0)
    ->withSets([
        \Rector\Set\ValueObject\SetList::DEAD_CODE,
        \Rector\Set\ValueObject\SetList::CODE_QUALITY,
        \Rector\Set\ValueObject\SetList::CODING_STYLE,
        \Rector\Set\ValueObject\SetList::EARLY_RETURN,
        \Rector\Set\ValueObject\SetList::TYPE_DECLARATION,
        \Rector\Set\ValueObject\SetList::PRIVATIZATION,
        \Rector\Set\ValueObject\SetList::RECTOR_PRESET,
        \Rector\Set\ValueObject\SetList::INSTANCEOF,
    ]);
