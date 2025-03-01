<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\FuncCall\RenameFunctionRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withPhpSets(php74: true)
    ->withPreparedSets(typeDeclarations: true)
    ->withConfiguredRule(RenameFunctionRector::class, [
        'view' => 'Laravel\Templating\render',
    ]);
