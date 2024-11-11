<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])

    // add a single rule
    ->withRules([
        NoUnusedImportsFixer::class,
    ])
    ->withConfiguredRule(
        checkerClass: ArraySyntaxFixer::class,
        configuration: [
            'syntax' => 'short',
        ]
    )
    // add sets - group of rules
    ->withPreparedSets(
        psr12: true,

    )

    ;
