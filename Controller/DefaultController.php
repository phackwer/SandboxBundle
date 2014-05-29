<?php

namespace SanSIS\Core\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SanSISCoreSandboxBundle:Default:index.html.twig', array('name' => $name));
    }
}
