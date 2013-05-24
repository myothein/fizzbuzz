<?php
// Task 1-1
function FizzBuzz($start, $end)
{
	$output = "";
	$numbers = range($start, $end);
	foreach($numbers as $number) {
		if( $number % 3 == 0 && $number % 5 == 0 ) {
			$output .= 'FizzBuzz';
		} elseif( $number % 3 == 0 ) {
			$output .= 'Fizz';			
		} elseif( $number % 5 == 0 ) {
			$output .= 'Buzz';
		} else {
			$output .= $number;
		}
		$output .= " ";
	}
	return $output;
}

// Task 1-2
function FizzBuzzBazz($start, $end)
{
	$output = "";
	$numbers = range($start, $end);
	$isFizz = false;
	$isBuzz = false;
	
	foreach($numbers as $number) {
		if( $number % 3 == 0 && $number % 5 == 0 ) {
			$output .= 'FizzBuzz';
			$isFizz = false;
			$isBuzz = false;
		} elseif( $number % 3 == 0 ) {
			$output .= 'Fizz';
			$isFizz = true;
		} elseif( $number % 5 == 0 ) {
			$output .= 'Buzz';
			$isBuzz = true;
		} else {
			// add rule
			if ($isFizz && $isBuzz) {
				$output .= 'Bazz';
			}
			else {
				$output .= $number;
			}
			$isFizz = false;
			$isBuzz = false;			
		}
		$output .= " ";
	}
	return $output;
}
?>
