<?php
namespace App\Components;

class RandomNumber {
	
	static function genrandom($min, $max, $quantity)
	{
		$numbers = range($min, $max);
    	shuffle($numbers);
    	return array_slice($numbers, 0, $quantity);
	}
}