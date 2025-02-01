<?php

declare(strict_types=1);

use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/.build',
        __DIR__ . '/ecs.php',
        __DIR__ . '/rector.php',
        __DIR__ . '/examples.php',
    ])
    ->withSkip([
        __DIR__ . '/tests/.data',
        __DIR__ . '/tests/.output',
        __DIR__ . '/tests/src/Support/_generated',
        LineLengthFixer::class,
    ])
    ->withSets([
        SetList::COMMON,
        SetList::PHPUNIT,
        SetList::CLEAN_CODE,
        SetList::ARRAY,
        SetList::COMMENTS,
        SetList::CONTROL_STRUCTURES,
        SetList::DOCBLOCK,
        SetList::NAMESPACES,
        SetList::SPACES,
        SetList::STRICT,
        SetList::SYMPLIFY,
        SetList::PSR_12,
    ]);
