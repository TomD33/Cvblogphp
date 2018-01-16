<?php

namespace AppBundle\Admin;

use function Sodium\add;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BlogAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titre', TextType::class,['label'=>'Titre'])
            ->add('description', TextType::class,['label'=>'Description'])
            ->add('image', TextType::class,['label'=>'Lien de la photo'])
            ->add('contenu', TextareaType::class,['label'=>'Contenu du post'])
            ->add('auteur', TextType::class,['label'=>'Auteur du post'])
            ->add('tag',TextType::class,['label'=>'Tag'])
            ->add('date', 'date', array('widget' => 'single_text', 'label' => false, 'format' =>'yyyy-MM-dd', 'data' => new \DateTime("now")));
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titre')->add('description')->add('image')->add('contenu')->add('auteur');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titre')->add('description')->add('auteur')->add('date');
    }
}