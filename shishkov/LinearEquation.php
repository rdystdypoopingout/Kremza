<?php

namespace Shishkov;

class LinearEquation
{
    protected $X;

    public function line($a, $b)
    {
        if ($a == 0) {
            throw new ShishkovException('Не существует!');
        }
        return $this->X = array(- ($b / $a));
    }
}
