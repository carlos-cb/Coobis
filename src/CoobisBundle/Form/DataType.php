<?php

namespace CoobisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('mozTitle')
            ->add('mozUrl')
            ->add('mozExternalLinks')
            ->add('mozRank')
            ->add('mozSubdomainMozRank')
            ->add('mozHttpStatusCode')
            ->add('mozPageAuthority')
            ->add('mozDomainAuthority')
            ->add('mozLinks')
            ->add('userId')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoobisBundle\Entity\Data'
        ));
    }
}
