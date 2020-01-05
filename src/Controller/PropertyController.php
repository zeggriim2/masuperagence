<?php

namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController{

    /**
     * Undocumented function
     * @Route("/biens", name="property.index")
     * @return void
     */
    public function index() {


        /*
        Debut programme :  ajout d'un bien
        // $property = new Property();
        // $property->setTitle('Mon premier titre')
        //         ->setDescription('Une petite description')
        //         ->setPrice(200000)
        //         ->setRooms(4)
        //         ->setBedrooms(3)
        //         ->setSurface(60)
        //         ->setFloor(4)
        //         ->setHeat(1)
        //         ->setCity('Montpellier')
        //         ->setAddress('15 boulevard Gambetta')
        //         ->setPostalCode('34000')
        //         ;

        // $entityManager = $this->getDoctrine()->getManager();
        // $entityManager->persist($property);
        // $entityManager->flush();
        
        Fin programme :ajout d'un bien
        */


        $property = $this->getDoctrine()
        ->getRepository(Property::class)->findAll(); 

        return $this->render('property/index.html.twig');
    }
}