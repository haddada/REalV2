<?php

/**
 *
 * @author FATHALLAH Wael
 */

namespace sprint2\RealEstate\AdminBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class testAjaxForm extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder,array $options){
        $builder->add('libelle')->add('pays')->add('valider' , 'submit');
        
    }
    public function getName() {
        return 'ModeleName';
        
    }
}