<?php

declare(strict_types=1);

use NunoMaduro\PhpInsights\Domain\Insights\ForbiddenNormalClasses;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;

return [
    'preset' => 'default',
    'ide' => 'phpstorm',
    'exclude' => [
    ],
    'add' => [
    ],
    'remove' => [
        ForbiddenNormalClasses::class,
    ],
    'config' => [
        LineLengthSniff::class => [
            'lineLimit' => 120,
            'absoluteLineLimit' => 120,
            'ignoreComments' => false,
        ],
    ],
    'requirements' => [
        'min-quality' => 100,
        'min-complexity' => 100,
        'min-architecture' => 100,
        'min-style' => 100,
    ],
];
