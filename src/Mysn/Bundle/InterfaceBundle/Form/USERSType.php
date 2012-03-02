<?php

namespace Mysn\Bundle\InterfaceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class USERSType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('EMAIL')
            ->add('PASS')
            ->add('FIRSTNAME')
            ->add('LASTNAME')
            ->add('ADDRESS')
            ->add('CITY')
            ->add('CP')
            ->add('COUNTRY')
            ->add('AVATAR')
            ->add('BIRTHDAY')
            ->add('STATUS')
            ->add('LAST_LOGIN')
            ->add('CREATE_DATE')
            ->add('IS_ENABLE')
        ;
    }

    public function getName()
    {
        return 'mysn_bundle_interfacebundle_userstype';
    }
}
