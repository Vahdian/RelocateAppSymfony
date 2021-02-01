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
     * @Route ("/applyform", name="apply")
     */
    function apply(){
        return $this->render('apply.html.twig');
    }
    /**
     * @Route ("/about", name="about")
     */
    function about(){
        return $this->render('about.html.twig');
    }
    /**
     * @Route ("/appliedform")
     */
    function formProcess(Request $r){

        $name = $r->request->get("name");
        $destination = $r->request->get("destination");
        $email = $r->request->get("email");

        dd($name, $destination, $email);
        
    }
}