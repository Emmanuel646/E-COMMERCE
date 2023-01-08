<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\CategoryType;
use App\Entity\FamilyProduct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nom du produit :'
            ])
            ->add('slug', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'identifiant (slug) :'
            ])
            ->add('touch', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nombre (touches pour clavier, taille en pouce pour écran) :'
            ])
            ->add('format', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Format :'
            ])
            ->add('category', EntityType::class, [
                'class' => CategoryType::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'type de produit :'
            ])
            ->add('price', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Prix :'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
