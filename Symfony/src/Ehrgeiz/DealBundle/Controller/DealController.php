<?php

namespace Ehrgeiz\DealBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DealController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EhrgeizDealBundle:Deal:Deal.html.twig', array('name' => $name));
    }
}
