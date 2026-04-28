<?php

require_once 'vendor/autoload.php';

use ScssPhp\ScssPhp\Compiler;

$compiler = new Compiler();
$compiler->setImportPaths('public/assets/scss/');

$scssFile = 'public/assets/scss/main.scss';
$cssFile = 'public/assets/css/main.css';

try {
    $scss = file_get_contents($scssFile);
    $css = $compiler->compileString($scss)->getCss();

    file_put_contents($cssFile, $css);

    echo "SCSS compiled successfully!\n";
    echo "Output: $cssFile\n";
} catch (Exception $e) {
    echo "Error compiling SCSS: " . $e->getMessage() . "\n";
}
