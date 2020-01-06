<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class PropertyController extends AbstractController{

    /**
     *
     * @var [propertyRepository]
     */
    private $propertyRepository;

    private $em;


    public function __construct(PropertyRepository $propertyRepository,EntityManagerInterface $em)
    {
        $this->propertyRepository = $propertyRepository;
        $this->em = $em;
    }

    /**
     * Undocumented function
     * @Route("/biens", name="property.index")
     * @return response
     */
    public function index():response {

        $property = $this->propertyRepository->findAllVisible();
        // $property[0]->setSold(true);
        // $this->em->flush();
        dump($property);

        // Debut programme :  ajout d'un bien
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
        // Fin programme :ajout d'un bien
        


        // $property = $this->getDoctrine()
        // ->getRepository(Property::class)->findAll(); 

        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties'
        ]);
    }
    /**
     * Undocumented function
     * @Route("/biens/{slug}-{id}", name="property.show", requirements={"slug": "[a-z0-9\-]*"})
     * @return response
     */
    public function show($slug, $id): response{

        $property = $this->propertyRepository->find($id);

        if (!$property) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->render('property/show.html.twig', [
            'current_menu' => 'properties',
            'property' => $property
        ]);
    }
}