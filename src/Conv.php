<?php

namespace Kata;

class Conv
{
    static private $conv = [
        10 => 'A',
        11 => 'B',
        12 => 'C',
        13 => 'D',
        14 => 'E',
        15 => 'F',
    ];

    public function convert(int $dec): string
    {
        if ($dec < 10) {
            return $dec;
        }
        $pezzi = [];
        while (true) {
            $resto = $dec % 16;
            $pezzi[] = $resto < 10 ? $resto : self::$conv[$resto];
            $dec = (int) floor($dec / 16);
            if ($dec <= 0) {
                break;
            }
        }

        return implode('', \array_reverse($pezzi));
    }
}
