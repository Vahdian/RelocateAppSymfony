<?php

namespace App\Controller;

use App\Form\ApplyFormType;
use App\Entity\FormContact;
use App\Entity\RelocateForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ApplyFormController extends AbstractController{
    
    /**
     * @Route("/apply", name="apply")
     */
    public function newQuery(Request $r, EntityManagerInterface $doctrine){

        $form = $this->createForm(ApplyFormType::class);

        $form->handleRequest($r);

        if ($form->isSubmitted() && $form->isValid()){

            $datos = $form->getData();

            $newQuery = new RelocateForm();
            $newQuery->setCode($datos["code"]);
            $newQuery->setName($datos["name"]);
            $newQuery->setDestination($datos["destination"]);
            $newQuery->setEmail($datos["email"]);

            $doctrine->persist($newQuery);
            $doctrine->flush($newQuery);

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
    /**
     * @Route("/listdemo", name="listdemo")
     */
    public function listDemo(EntityManagerInterface $doctrine){
        $repository = $doctrine->getRepository(RelocateForm::class);
        $list = $repository->findAll();
        return $this->render('listdemo.html.twig', ['list' => $list]);
    }
}