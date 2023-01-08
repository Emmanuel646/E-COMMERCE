<?php

namespace App\Controller;

use App\Entity\Products;
use App\Form\ProductFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class AddProductController extends AbstractController
{
    #[Route('/add/product', name: 'app_add_product')]
    public function addproduct(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Products();
        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password

            $entityManager->persist($product);
            $entityManager->flush();
            // do anything else you need here, like send an email
        }

        return $this->render('add_product/addproduct.html.twig', [
            'productForm' => $form->createView(),
        ]);
    }
}
