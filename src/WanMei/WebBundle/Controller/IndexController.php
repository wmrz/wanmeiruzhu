<?php

namespace WanMei\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller {

    /**
     * @Route("/", name="_")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}