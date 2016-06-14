<?php

namespace ET\ETTicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class RequestType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $promoterArray = $options['promoterArray'];
        $promoterArrayChoices = array();
        if(count($promoterArray) > 0) {
            foreach ($promoterArray as $singlePromoter) {
                $promoterArrayChoices[$singlePromoter['fullname']] = $singlePromoter['id'];
            }
        }       
        
        $requestLingua = array();
        if (count($options['languageArrayChoices']) > 0) {
            $requestLingua = $options['languageArrayChoices'];
        }
        
        $requestFsu = array();
        if (count($options['productArrayChoices']) > 0) {
            $requestFsu = $options['productArrayChoices'];
        }
        

        $builder
            ->add('requestMaildest', ChoiceType::class, array(
                'choices' => $promoterArrayChoices,
                'required' => true                
            ))
            ->add('requestName', TextType::class, array(
                'required' => true
            ))
            ->add('requestSurname', TextType::class, array(
                'required' => true
            ))
            ->add('requestEmail', EmailType::class, array(
                'required' => false
            ))
            ->add('requestTel', TextType::class, array(
                'required' => false
            ))    
            ->add('requestCell', TextType::class, array(
                'required' => false
            ))
            ->add('requestRepfrom', TextType::class, array(
                'required' => false
            ))
            ->add('requestRepto', TextType::class, array(
                'required' => false
            ))
            ->add('requestLingua', ChoiceType::class, array(
                'choices' => $requestLingua,
                'required' => true                
            ))
            ->add('requestFsu', ChoiceType::class, array(
                'choices' => $requestFsu,
                'required' => true                
            ))
            ->add('requestPackage', TextType::class, array(
                'required' => true
            ))
            ->add('requestPeriodfrom', TextType::class, array(
                'required'  => true
            ))
            ->add('requestPeriodto', TextType::class, array(
                'required'  => true
            ))
            ->add('requestOther', TextareaType::class, array(
                'required' => true
            ))    
            ->add('requestCost')
           ->add('requestAnagraficaId')
            ->add('requestAnagraficaPromotoreId')
            ->add('requestCode')
            ->add('requestLinkedRequestId')
            ->add('requestDateAssignedPromotore', DateTimeType::class, array(
                'widget'    => 'single_text',
                'format'    =>  'dd/MM/yyyy HH:mm:ss',                
            ))   
            ->add('requestDate', DateTimeType::class, array(
                'widget'    => 'single_text',
                'format'    =>  'dd/MM/yyyy HH:mm:ss',                
            ))                   
            ->add('requestAdults')
            ->add('requestChildren')
            ->add('requestChildrendetails')                 
            ->add('requestOffice') 
            ->add('requestCountry')
            ->add('requestComment')                
            ->add('requestDominioPromotore')                                                
            ->add('requestFcd')
            ->add('requestPid')                
            ->add('requestFmt')                
            ->add('requestMailrif')                        
            ->add('requestPacchetonome')       
            ->add('requestPrpname')
            ->add('requestPrpid')
            ->add('requestPrpmail')    
            ->add('requestAgenzia')    
            ->add('requestCanLink')    
            ->add('requestNewsletter')    
            ->add('requestLoggedUsers')
            ->add('requestCampagna')      
                
            ->add('requestAssignedPromotoreId')
            ->add('requestStatus')                        
            ->add('requestPromotoreid', ChoiceType::class)
            ->add('requestTimeLeft')                                                            
            
            ->add('save', SubmitType::class, array('label' => 'Send the request'))
        
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) use ($promoterArray) {
                $data = $event->getData();
                if(count($promoterArray) > 0) {
                    foreach ($promoterArray as $singlePromoter) {
                        if ($data->getRequestMaildest() == $singlePromoter['id']) {
                            $data->setRequestMaildest($singlePromoter['email']);
                            $data->setRequestFmt($singlePromoter['email']);
                            $data->setRequestDominioPromotore($singlePromoter['url1']);
                        }
                    }
                }
                
                if ($data->getRequestAnagraficaId() == null) {
                    $data->setRequestAnagraficaId('');
                }                
                
                if ($data->getRequestCost() == null) {
                    $data->setRequestCost('');
                }
                
                if ($data->getRequestMailrif() == null) {
                    $data->setRequestMailrif('');
                }
                
                if ($data->getRequestOffice() == null) {
                    $data->setRequestOffice('');
                }
                
                if ($data->getRequestCountry() == null) {
                    $data->setRequestCountry('');
                }
                
                if ($data->getRequestComment() == null) {
                    $data->setRequestComment('');
                }  
                
                if ($data->getRequestPrpname() == null) {
                    $data->setRequestPrpname('');
                }
                
                if ($data->getRequestPrpmail() == null) {
                    $data->setRequestPrpmail('');
                }

                if ($data->getRequestEmail() == null) {
                    if (!empty($data->getRequestCode())) {
                        $data->setRequestEmail('contattidiretti+#' . $data->getRequestCode() . '@evolutiontravel.it');
                    }
                }
                
                $event->setData($data);

            });
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'ET\ETTicketBundle\Entity\Request',
            'promoterArray' => null,
            'languageArrayChoices' => null,
            'productArrayChoices' => null
        ));
    }

}
