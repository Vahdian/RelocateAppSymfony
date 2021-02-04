<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController{
    /**
     * @Route ("/", name="homepage")
     */
    function home(){
        return $this->render('index.html.twig');
    }
      /**
     * @Route ("galaxyfederation", name="galaxyfederation")
     */
    function galaxyFederation(){
        return $this->render('galaxyfederation.html.twig');
    }

    /**
     * @Route ("/about", name="about")
     */
    function about(){
        return $this->render('about.html.twig');
    }
    
}