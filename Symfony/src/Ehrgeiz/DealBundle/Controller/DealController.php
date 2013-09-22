<?php

namespace Ehrgeiz\DealBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class DealController
{
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
