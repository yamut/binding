<?php

namespace App\Services;

class FooService {

    public int $a;

    public function __construct(int $a)
    {
        $this->a = $a;
    }
}

