<?php

namespace Netgen\HybridApproachBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;


/**
 * Class representing basic search form
 */
class FilterSearchType extends AbstractType
{
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return "filtersearch";
    }

    /**
     * Sets the default options for this type
     *
     * @param \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver
     */
    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults(array(
            'term' => 'enter search term',
            'intention' => 'search'
        ));
    }

    /**
     * Builds the form
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder ->add( 'price', 'choice', array(
            'label' => 'Filter by price:',
            'empty_value' => 'Choose an option',
            'choices' => array( '20' => '<20',
                                '40' => '<40',
                                '60' => '<60')
            ))
            ->add('save', 'submit', array('label' => 'Filter!'));
    }
}
