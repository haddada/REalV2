<?php

namespace sprint2\RealEstate\AdminBundle\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of AjouCForm
 * @author FATHALLAH Wael
 */
class AjouGForm extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder,array $options){
        $builder->add('mail')->add('nom')->add('prenom')->add('password')->add('image', 'file')->add('statusMatrimonial')->add('nummobile')->add('numfix')->add('Ajouter' , 'submit');
        
    }
    public function getName() {
        return 'GName';
        
    }
    
}
