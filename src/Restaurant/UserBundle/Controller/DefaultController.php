<?php

namespace Restaurant\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RestaurantUserBundle:Default:index.html.twig');
    }
}
