<?php

namespace McArrowsmithPackages\HouseCodeStyleRules;

class PhpCsFixer
{
    public static function make(): array
    {
        return include __DIR__ . '/../.php-cs-fixer.mcarrowsmith-dist.php';
    }
}
