<?php
namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController {

    /**
     *@Route("/", name="home")
     *
     * @return void
     */
    public function index(PropertyRepository $propertyRepository) {
        $properties = $propertyRepository->findLatest();
        return $this->render('pages/home.html.twig', [
            'properties' => $properties
        ]);
    }
}