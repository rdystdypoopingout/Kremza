<?php

namespace shishkov;

use core\EquationInterface;

class QuadroEquation extends LinearEquation implements EquationInterface
{


	protected function Discriminant($a, $b, $c)
    {
		return ($b**2)-4*$a*$c;
    }
	
	public function solve($a, $b, $c)
    {

	    if($a == 0)
	    {
	        return $this->LinearEquation($b,$c);
	    }

        $d = $this->Discriminant($a, $b, $c);


        if($d == 0)
        {
            return $this->x = array(-($b/(2*$a)));
        }
		
		if ($d < 0)
		{
            throw new shishkovException("Doesnt have a roots!");
		}

        return $this->x = array((-$b+sqrt($d))/(2*$a),  (-$b-sqrt($d))/(2*$a));
		
	}
	
}