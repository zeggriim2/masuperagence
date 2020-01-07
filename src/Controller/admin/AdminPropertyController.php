<?php

namespace App\Controller\admin;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/admin/property/create", name="admin.property.new", methods={"GET","POST"})
     * @return void
     */
    public function new(Request $request){
        $property = new Property();
        $form = $this->createForm(PropertyType::class, $property);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($property);
            $this->em->flush();
            $this->addFlash('success','Votre bien à été créer.');
            return $this->redirectToRoute('admin.property.index');
        }

        return $this->render('admin/property/new.html.twig', [
            'property' => $property,
            'form' => $form->createView()
        ]);

    }

    /**
     *
     * @Route("/admin/property/{id}", name="admin.property.edit", methods={"GET","POST"})
     */
    public function edit(Property $property, Request $request) {
        $form = $this->createForm(PropertyType::class, $property);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success','Votre bien à été modifié.');
            return $this->redirectToRoute('admin.property.index');
        }

        return $this->render('admin/property/edit.html.twig', [
            'property' => $property,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/admin/property/{id}", name="admin.property.delete", methods={"DELETE"})
     * @return void
     */
    public function delete(Property $property, Request $request){

        $submittedToken = $request->request->get('token');
        
        // 'delete' is the same value used in the template to generate the token
        if ($this->isCsrfTokenValid('delete', $submittedToken)) {
            $this->em->remove($property);
            $this->em->flush();
        }
        
        return $this->redirectToRoute('admin.property.index');
    }

}