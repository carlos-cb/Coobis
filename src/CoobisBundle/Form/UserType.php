<?php

namespace CoobisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('enabled', 'checkbox', array('required' => false))
            ->add('plain_password', 'password', array(
                'required' => false,
            ))
            ->add('plain_password', 'repeated', array(
                'type' => 'password',
                'first_options' => array(
                    'label' => 'Password',
                ),
                'second_options' => array(
                    'label' => 'Password Again',
                ),
                'required' => false,
            ))
            ->add('locked', 'checkbox', array('required' => false))
            ->add('expired', 'checkbox', array('required' => false))
            ->add('roles', 'choice', array(
                'choices' => array(
                    'ROLE_USER' => 'Normal User',
                    'ROLE_ADMIN' => 'Backend User',
                    'ROLE_POST' => 'Post Admin',
                    'ROLE_CATEGORY' => 'Category Admin',
                    'ROLE_SUPER_ADMIN' => 'Super Admin',
                ),
                'multiple' => true,
                'expanded' => true,
                'required' => false,
            ))
            ->add('credentialsExpired', 'checkbox', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoobisBundle\Entity\User'
        ));
    }
}
