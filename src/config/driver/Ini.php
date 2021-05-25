<?php

namespace Xnrcms\BaseHelper\config\driver;

/**
 * Class Ini
 * @package Xnrcms\BaseHelper\config\driver
 */
class Ini
{
    public function parse($config)
    {
        if (is_file($config)) {
            return parse_ini_file($config, true);
        } else {
            return parse_ini_string($config, true);
        }
    }
}
