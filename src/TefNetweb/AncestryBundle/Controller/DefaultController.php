<?php

namespace TefNetweb\AncestryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TefNetwebAncestryBundle:Default:index.html.twig');
    }
}
