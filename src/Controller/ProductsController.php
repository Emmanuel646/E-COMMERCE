<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/clavier', name: 'clavier')]
    public function clavier(ProductsRepository $productsRepository): Response
    {
        return $this->render('products/clavier.html.twig', [
            'products' => $productsRepository->findBy([],
                ['id' => 'asc'])
        ]);
    }

    #[Route('/ecran', name: 'ecran')]
    public function ecran(ProductsRepository $productsRepository): Response
    {
        return $this->render('products/ecran.html.twig', [
            'products' => $productsRepository->findBy([],
                ['id' => 'asc'])
        ]);
    }

    #[Route('/souris', name: 'souris')]
    public function souris(ProductsRepository $productsRepository): Response
    {
        return $this->render('products/souris.html.twig', [
            'products' => $productsRepository->findBy([],
                ['id' => 'asc'])
        ]);
    }

    #[Route('/arcade', name: 'arcade')]
    public function arcade(ProductsRepository $productsRepository): Response
    {
        return $this->render('products/arcade.html.twig', [
            'products' => $productsRepository->findBy([],
                ['id' => 'asc'])
        ]);
    }

    #[Route('/course', name: 'course')]
    public function course(ProductsRepository $productsRepository): Response
    {
        return $this->render('products/course.html.twig', [
            'products' => $productsRepository->findBy([],
                ['id' => 'asc'])
        ]);
    }

    #[Route('/sport', name: 'sport')]
    public function sport(ProductsRepository $productsRepository): Response
    {
        return $this->render('products/sport.html.twig', [
            'products' => $productsRepository->findBy([],
                ['id' => 'asc'])
        ]);
    }
}
