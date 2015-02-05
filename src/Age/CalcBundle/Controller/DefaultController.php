<?php

namespace Age\CalcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AgeCalcBundle:Default:index.html.twig', array('name' => $name));
    }
}
