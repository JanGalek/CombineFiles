<?php

require __DIR__.'/../../vendor/autoload.php';

use Galek\Utils;
use Galek\Utils\LoadFiles;
use Galek\Utils\CombineFiles;

class Basic
{
    public function render()
    {
        $path = __DIR__.'/css';
        $t = new Utils\CombineFiles($path);
        $t->addFile('main.css');
        $t->addFile('top.css');
        $t->addFile('bot.css');
        return $t;
    }
}

$basic = new Basic();
?><h1><?php $basic->render(); ?></h1>