<?php

declare(strict_types=1);

/*
 * This file is part of manaTest.
 *
 * (c) Maxime Brignon <ptimax@lilo.org>
 *
 */

$header = <<<'EOF'
This file is part of manaTest.

(c) Maxime Brignon <ptimax@lilo.org>

EOF;

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('var')
    ->exclude('config')
    ->exclude('build')
    ->notPath('src/Kernel.php')
    ->notPath('public/index.php')
    ->notPath('tests/bootstrap.php')
    ->in(__DIR__)
    ->name('*.php')
    ->ignoreDotFiles(true)
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@PhpCsFixer' => true,
        '@Symfony' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration:risky' => true,
        '@DoctrineAnnotation' => true,
        '@PhpCsFixer:risky' => true,
    ])
    ->setFinder($finder)
;

return $config;
