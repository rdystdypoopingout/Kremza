<?php

namespace shishkov;



class LinearEquation
{
    public function LinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new shishkovException('doesnt exist');
        }

        return $this->x = [$b * (-1) / $a];
    }

    protected $x;
}