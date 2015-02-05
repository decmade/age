<?php
namespace Age\Models;

use \DateTime;

/**
 * class represents an age as a timespand
 * @author JOHN
 *
 */
class Age 
{
	/**
	 * date of birth/inception
	 * @var \DateTime
	 */
	private $birthDate;
	
	/**
	 * attempts to set the birth datetime value
	 * using the date string passed
	 * 
	 * @param string $birthDate
	 */
	public function setBirthDate($birthDate)
	{
		// attempt to create a DateTime value using the string
		try {
			$dateValue = new DateTime($birthDate);
			$this->birthDate = $dateValue;
		} catch(Exeption $e) {
			// stub
		} 
		
		return $this;
	}
	
	/**
	 * returns the formatted result
	 * of the time span since the $birthDate value
	 * 
	 * @return string
	 */
	public function getFullAge()
	{
		$birthDate = $this->birthDate;
		$span = $birthDate->diff(new DateTime());
		$delimeter = ", "; // string used to separate time span denominaotrs
		$output = false;
		
		$map = array(
			'years' => $span->y,
			'months' => $span->m,
			'days' => $span->d,
			'hours' => $span->h,
			'minutes' => $span->i,
			'seconds' => $span->s,
		);
		
		// parse the map array to format the time denominators for output
		foreach($map as $denominator=>$value) {
			// if the value for the denominator is 0 then skip it
			if ($value == 0) {
				continue;
			}
			
			// if there is output already then add delimeter string
			if ($output) {
				$output .= $delimeter;
			}
			
			$output .= sprintf('%s %s',
				$value,
				$denominator
			);
			
		}
		
		return $output;
	}

	
}