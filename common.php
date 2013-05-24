<?php
class Number
{
	private $output = "";
	private $isFizz = false;
	private $isBuzz = false;
	
	public function getFizzBuzz($from, $to)
	{
		$this->output = "";
		for($i = $from; $i <= $to; $i++)
		{
			if( $i % 3 == 0 && $i % 5 == 0 ) {
				$this->output .= 'FizzBuzz';
			} elseif( $i % 3 == 0 ) {
				$this->output .= 'Fizz';			
			} elseif( $i % 5 == 0 ) {
				$this->output .= 'Buzz';
			} else {
				$this->output .= $i;
			}
			$this->output .= " ";
		}		
		return $this->output;
	}
	
	public function getFizzBuzzBazz($from, $to)
	{
		$this->output = "";
		for($i = $from; $i <= $to; $i++)
		{
			if( $i % 3 == 0 && $i % 5 == 0 ) {
				$this->output .= 'FizzBuzz';
				$this->isFizz = false;
				$this->isBuzz = false;
			} elseif( $i % 3 == 0 ) {
				$this->output .= 'Fizz';	
				$this->isFizz = true;
			} elseif( $i % 5 == 0 ) {
				$this->output .= 'Buzz';
				$this->isBuzz = true;
			} else {
				if ($this->isFizz && $this->isBuzz) {
					$this->output .= 'Bazz';
				}
				else {
					$this->output .= $i;
				}
				$this->isFizz = false;
				$this->isBuzz = false;				
			}
			$this->output .= " ";
		}		
		return $this->output;
	}
}

?>
