<?php

namespace Xnrcms\BaseHelper\config\driver;

/**
 * Class Xml
 * @package Xnrcms\BaseHelper\config\driver
 */
class Xml
{
    public function parse($config)
    {
        if (is_file($config)) {
            $content = simplexml_load_file($config);
        } else {
            $content = simplexml_load_string($config);
        }
        $result = (array) $content;
        foreach ($result as $key => $val) {
            if (is_object($val)) {
                $result[$key] = (array) $val;
            }
        }
        return $result;
    }
}
