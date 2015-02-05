<?php

namespace Age\CalcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$dob = '1979-08-08';
    	$calculationResult = $this->calculateAction($dob);
    	
        return $this->render('AgeCalcBundle:Default:index.html.twig', array('calculation' => $calculationResult) );
    }
    
    /**
     * calculate age action
     * 
     * @param string $dob (yyyy-mm-dd)
     */
    public function calculateAction($dob)
    {
    	$age = $this->get('age');
    	$age->setBirthDate($dob);
    	
    	return print_r($age, true);
    }
}
