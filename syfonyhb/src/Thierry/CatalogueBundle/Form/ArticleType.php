<?php

namespace Thierry\CatalogueBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add("titre", Type\TextType::class)
        ->add("auteur", Type\TextType::class)
        ->add("contenu", Type\TextareaType::class)
        ->add("date", Type\DateType::class)
        ->add("prix", Type\MoneyType::class)
        ->add("publication", Type\CheckboxType::class,
                ['required' => false])
//        ->add('date_modification', Type\DateType::class)
        ->add('image', ImageType::class,
                ['required' => false])
        ->add('categories', EntityType::class,
                ['required' => false,
                'class' => 'ThierryCatalogueBundle:Categorie',
                'choice_label'=>'titre',
                'expanded' => true,
                'multiple' => true,
                'query_builder' => function($er){
                    return $er->createQueryBuilder("c")->orderBy("c.titre","ASC");
                }
                ])

        ->add("submit", Type\SubmitType::class,
                ['label' => 'Ajouter'])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Thierry\CatalogueBundle\Entity\Article'
        ));
    }
}
