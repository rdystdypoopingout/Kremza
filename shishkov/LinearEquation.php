<?php

namespace shishkov;



class LinearEquation
{
	public function LinearEquation($a, $b)
    {
			if($a == 0)
			{
                throw new shishkovException("Error! Equation doesnt exist!");
			}
            MyLog::log("Its Linear equation!");
			return $this->x = array(-($b/$a));
	}

	protected $x;
}
