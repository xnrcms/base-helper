<?php

namespace Xnrcms\BaseHelper\config\driver;

/**
 * Class Json
 * @package Xnrcms\BaseHelper\config\driver
 */
class Json
{
    public function parse($config)
    {
        if (is_file($config)) {
            $config = file_get_contents($config);
        }

        return json_decode($config, true);
    }
}
