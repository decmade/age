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
	
	
}