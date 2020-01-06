<?php

namespace App\Controller\admin;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPropertyController extends AbstractController {

    /**
     * @var propertyRepository
     */
    private $propertyRepository;

    private $em;

    public function __construct(PropertyRepository $propertyRepository, EntityManagerInterface $em)
    {
        $this->propertyRepository = $propertyRepository;
        $this->em = $em;
    }

    /**
     *
     * @Route("/admin", name="admin.property.index")
     */
    public function index() {
        $properties = $this->propertyRepository->findAll();

        return $this->render('admin/property/index.html.twig', compact('properties'));
    }

    /**
     *
     * @Route("/admin/{id}", name="admin.property.edit")
     */
    public function edit(Property $property, Request $request) {
        $form = $this->createForm(PropertyType::class, $property);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            return $this->redirectToRoute('admin.property.index');
        }

        return $this->render('admin/property/edit.html.twig', [
            'property' => $property,
            'form' => $form->createView()
        ]);
    }

}