<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/examples.php',
    ])
    ->withSkip([
        // paths to skip
//        NoUnusedImportsFixer::class,
        __DIR__ . '/tests/_data',
        __DIR__ . '/tests/_output',
        __DIR__ . '/tests/_support/_generated',
    ])

    // add a single rule
    ->withRules([
        NoUnusedImportsFixer::class,
    ])

    // add sets - group of rules
   // ->withPreparedSets(
        // arrays: true,
        // namespaces: true,
        // spaces: true,
        // docblocks: true,
        // comments: true,
    // )
    ->withSets([
        // run and fix, one by one
//        'common',
//        'phpunit',
//        'clean-code',
//        'array',
//        'comments',
//        'control-structures',
//        'docblock',
//        'namespaces',
//        'spaces',
//        'symplify',
        SetList::PSR_12,
    ])
     
     ;
