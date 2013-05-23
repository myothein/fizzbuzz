<?php
// Task 1-1
function FizzBuzz($start, $end)
{
  $output = "";
	$numbers = range($start, $end);
	foreach($numbers as $number) {
		if( $number % 3 == 0 && $number % 5 == 0 ) {
			$output .= 'FizzBuzz ';
		} elseif( $number % 5 == 0 ) {
			$output .= 'Buzz ';
		} elseif( $number % 3 == 0 ) {
			$output .= 'Fizz ';
		} else {
			$output .= $number." ";
		}
	}
	return $output;
}

// Task 1-2
function FizzBuzzBazz($start, $end)
{
	$output = "";
	$numbers = range($start, $end);
	foreach($numbers as $number) {
		if( $number % 3 == 0 && $number % 5 == 0 ) {
			$output .= 'FizzBuzz ';
		} elseif( $number % 5 == 0 ) {
			$output .= 'Buzz ';
		} elseif( $number % 3 == 0 ) {
			$output .= 'Fizz ';
		}
		// add rules
		elseif (((($number-2) % 3) == 0) && ((($number-1) % 5) == 0)){
			$output .= 'Bazz ';
		}
		elseif (((($number-2) % 5) == 0) && ((($number-1) % 3) == 0)){
			$output .= 'Bazz ';
		} else {
			$output .= $number." ";
		}
	}
	return $output;
}
?>
