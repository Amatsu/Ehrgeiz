<?php

namespace Ehrgeiz\DealBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EhrgeizDealBundle:Default:index.html.twig', array('name' => $name));
    }
}
