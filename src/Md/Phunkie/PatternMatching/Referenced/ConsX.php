<?php

namespace Md\Phunkie\PatternMatching\Referenced;

class ConsX
{
    public $head;
    public $tail;

    public function __construct(&$x, $xs)
    {
        $this->head = &$x;
        $this->tail = $xs;
    }
}