<?php

namespace Mysn\Bundle\InterfaceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ARTICLESType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('CONTENT')
        ;
    }

    public function getName()
    {
        return 'mysn_bundle_interfacebundle_articlestype';
    }
}
