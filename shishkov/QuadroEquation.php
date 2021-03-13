<?php

namespace shishkov;

use core\EquationInterface;

require("core/EquationInterface.php");
require("LinearEquation.php");

class QuadroEquation extends LinearEquation implements EquationInterface
{

    protected function Discriminant($a, $b, $c)
    {
        return $b * $b - 4 * $a * $c;
    }

    public function solve($a, $b, $c)
    {
        if ($a == 0) {
            return $this->LinearEquation($b, $c);
        }

        $d = $this->Discriminant($a, $b, $c);

        if ($d == 0) {
            return $this->x = ($b * (-1)) / (2 * $a);
        }

        if ($d < 0) {
            throw new shishkovException('doesnt exist');
        }

        return $this->x = [($b * (-1) - sqrt($d)) / (2 * $a), ($b * (-1) + sqrt($d)) / (2 * $a)];
    }
}
