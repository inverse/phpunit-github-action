<?php

namespace Test\Inverse\Toy;

use Inverse\Toy\Add;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Inverse\Toy\Add
 */
class AddTest extends TestCase
{
    public function testAddInt(): void
    {
        $add = new Add();
        self::assertEquals(4, $add->int(2, 2));
    }

    public function testAddFloat(): void
    {
        $add = new Add();
        self::assertEquals(4.0, $add->float(2.0, 2.0));
    }
}
