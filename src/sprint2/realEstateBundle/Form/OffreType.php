<?php

namespace sprint2\realEstateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idGerant')
            ->add('etat')
            ->add('typeimmob')
            ->add('nature')
            ->add('payement')
            ->add('surface')
            ->add('nbrpiece')
            ->add('datepublication')
            ->add('datemodification')
            ->add('dispobileapartir')
            ->add('description')
            ->add('etage')
            ->add('ascenceur')
            ->add('cuisineequipe')
            ->add('jardin')
            ->add('entreeindep')
            ->add('gazdeville')
            ->add('chauffage')
            ->add('meuble')
            ->add('climatisation')
            ->add('note')
            ->add('urlimage')
            ->add('position')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sprint2\realEstateBundle\Entity\Offre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sprint2_realestatebundle_offre';
    }
}
