<?php

namespace Md\Phunkie\PatternMatching\Referenced;

class Success
{
    public $value;
    public function __construct(&$value)
    {
        $this->value = &$value;
    }
}