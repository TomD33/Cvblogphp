<?php
namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Form\Type\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CommentairesAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('pseudo', TextType::class,['label'=>'Pseudo'])
            ->add('commentaires', TextAreaType::class,['label'=>'Commentaires'])
            ->add('isvalid', BooleanType::class,['label'=>'Valider'])
            ->add('idarticle', TextType::class,['label'=>'Numéro Article']);
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('pseudo')->add('commentaires')->add('isvalid')->add('idarticle');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('pseudo')->add('commentaires');
    }
}

