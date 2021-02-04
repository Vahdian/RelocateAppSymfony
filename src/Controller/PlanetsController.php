<?php
namespace App\Controller;

use App\Entity\Planets;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlanetsController extends AbstractController{
    /**
     * @Route("/mewplanet")
     */
    public function insertPlanets(EntityManagerInterface $doctrine){
        $tutaga = new Planets();
        $tutaga->setName('tutaga');
        $tutaga->setImagen('iodajeodia');
        $tutaga->setDescription('Cool');

        $doctrine->persist($tutaga);
        $doctrine->flush();
    }
    /**
     *  @Route("/pokemon/{id}")
     */
        
     public function getPlanet($id, EntityManagerInterface $doctrine){
         $repository = $doctrine->getRepository(Planets::class);
         $Planet = $repository->findAll();
     }
}