<?php

namespace App\Controller;

use App\Form\ApplyFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApplyFormController extends AbstractController{
    
    /**
     * @Route("/apply")
     */
    public function newQuery(Request $r){

        $form = $this->createForm(ApplyFormType::class);

        $form->handleRequest($r);

        if ($form->isSubmitted() && $form->isValid()){
            $datos = $form->getData();
            $this->addFlash('sucess', 'Your data has been saved. Good luck on your journey!');
            return $this->redirectToRoute('homepage');
        } else {

        return $this->render(
            'applyform.html.twig',[
                'applyForm'=>$form->createView(),
            ]
            );
        }
    }
}