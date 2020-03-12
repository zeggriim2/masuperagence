<?php
namespace App\Controller;

use App\Repository\PropertyRepository;
use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 *@Route("/")
*/
class HomeController extends AbstractController {

    /**
     *@Route("/", name="home_index", methods={"GET"})
    */
    public function index(PropertyRepository $propertyRepository, BlogRepository $blogRepository) {
        $properties = $propertyRepository->findLatest();
        $articles = $blogRepository->findOrderByDate();
        return $this->render('accueil/accueil.html.twig', [
            'properties' => $properties,
            'articles' => $articles
        ]);
    }
}