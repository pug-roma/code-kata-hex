<?php

namespace Tests;

use Kata\Conv;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testFoo(int $dec, string $hex): void
    {
        $conv = new Conv();
        $this->assertEquals($hex, $conv->convert($dec));
    }

    public function provider(): array
    {
        return [
            'zero' => ['0', '0'],
            'uno' => ['1', '1'],
            'minore di 10' => ['4', '4'],
            'un alttro minore di 10' => ['9', '9'],
            'il 10' => ['10', 'A'],
            'l\'11' => ['11', 'B'],
            'il 12' => ['12', 'C'],
            'il 13' => ['13', 'D'],
            'il 14' => ['14', 'E'],
            'il 15' => ['15', 'F'],
            'il 16' => ['16', '10'],
            'il 19' => ['19', '13'],
            'il 255' => ['255', 'FF'],
            'un numerone' => ['65535', 'FFFF'],
        ];
    } 
}
