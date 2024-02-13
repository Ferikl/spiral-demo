<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude([
        'app/database/migrations',
    ])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        '@PER-CS' => true,
        '@PER-CS2.0' => true,
        '@PHP83Migration' => true,
        //'@Symfony' => true,
    ])
    ->setFinder($finder)
    ;