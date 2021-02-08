<?php

namespace Inverse\Toy;


class Add
{
    public function int(int $x, int $y): int
    {
        return $x + $y;
    }

    public function float(float $x, float $y): float
    {
        return $x + $y;
    }
}
