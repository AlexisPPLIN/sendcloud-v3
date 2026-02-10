<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPHPStanConfigs([
        __DIR__ . '/phpstan.neon',
    ])
    ->withRules([
        DeclareStrictTypesRector::class
    ])
    ->withPreparedSets(codingStyle: true)
    ->withImportNames(
        removeUnusedImports: true
    );
