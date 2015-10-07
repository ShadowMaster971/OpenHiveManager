<?php

namespace KG\BeekeepingManagementBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReineType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $startDate = date("Y")-5;

        $builder              
            ->add('race', 'entity', array(
                        'class' => 'KGBeekeepingManagementBundle:Race',
                        'choice_label' => 'libelle',
                        'empty_value' => '',
                        'empty_data'  => null,
                        'attr' => array('label_col' => 4, 'widget_col' => 5)
                    ))
                                
            ->add('provenanceReine', 'entity', array(
                        'class' => 'KGBeekeepingManagementBundle:ProvenanceReine',
                        'choice_label' => 'libelle',
                        'empty_value' => '',
                        'empty_data'  => null,
                        'attr' => array('label_col' => 4, 'widget_col' => 5)
                    ))     
                
            ->add('anneeReine', 'collot_datetime', 
                    array( 
                            'pickerOptions' =>
                                array('format' => 'yyyy',
                                    'autoclose' => true,
                                    'startDate' => (string)$startDate,
                                    'endDate'   => date('Y'), 
                                    'startView' => 'decade',
                                    'minView' => 'decade',
                                    'maxView' => 'decade',
                                    'todayBtn' => false,
                                    'todayHighlight' => false,
                                    'keyboardNavigation' => true,
                                    'language' => 'fr',
                                    'forceParse' => true,
                                    'pickerReferer ' => 'default', 
                                    'pickerPosition' => 'bottom-right',
                                    'viewSelect' => 'decade',
                                    'initialDate' => date('Y'), 
                                ),
                            'read_only' => true,
                            'attr' => array('label_col' => 4, 'widget_col' => 5)
                ))
                
            ->add('clippage', 'checkbox', array(
                'required'  => false,
                'label'     => false
            ))
        
            ->add('marquage', 'checkbox', array(
                'required'  => false,
                'label'     => false
            ));       
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'KG\BeekeepingManagementBundle\Entity\Reine'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kg_beekeepingmanagementbundle_reine';
    }
}
