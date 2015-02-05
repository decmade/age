<?php

namespace Age\CalcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * default controller action
	 * 
	 */
    public function indexAction()
    {
    	return $this->inputAction();
//     	$dob = '1979-08-08';
//     	return $this->calculateAction($dob);
    	
        //return $this->render('AgeCalcBundle:Default:index.html.twig', array('calculation' => $calculationResult) );
    }
    
    /**
     * calculate age action
     * 
     * @param string $dob (yyyy-mm-dd)
     */
    public function calculateAction($dob)
    {
    	if (!$dob) {
    		$request = $this->get('request');
    		if ($request->getMethod() == 'POST') {
    			// stub
    			$dob = '1979-08-08'; // testing logic with default value
    		}
    	}
    	
    	$age = $this->get('age');
    	$age->setBirthDate($dob);
    	
    	return $this->render('AgeCalcBundle:Default:calculate.html.twig', array('age' => $age ));
    }
    
    /**
     * input the date of birth form action
     * 
     */
    public function inputAction()
    {
    	$age = $this->get('age');
    	
    	$form = $this->createFormBuilder($age)
    		->add('birthDate', 'date', array(
    				'years' => range(date('Y') - 100, date('Y')), 
    				'label' => 'Enter Your Date of Birth:')
    		)
    		->add('calculate', 'submit', array('label' => 'Calculate Age'))
    		->setAction($this->generateUrl('age_calc_calculate'))
    		->getForm();
    	
    	return $this->render('AgeCalcBundle:Default:input.html.twig', array(
    			'form' => $form->createView(),
    	));
    }
}
