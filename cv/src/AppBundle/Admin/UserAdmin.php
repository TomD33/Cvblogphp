<?php
/**
 * Created by PhpStorm.
 * User: skewrad
 * Date: 15/01/18
 * Time: 16:39
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\Filter\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username', TextType::class,['label'=>'Pseudo'])
            ->add('email', TextType::class,['label'=>'Email'])
            ->add('password', TextType::class,['label'=>'Mot de passe'])
            ->add('enabled',TextType::class,['label'=>'Activé'])
            ->add('roles',TextType::class,['label'=>'Rôles']);
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username')->add('email')->add('password')->add('enabled')->add('roles');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username')->add('email')->add('password')->add('enabled')->add('roles');
    }
}