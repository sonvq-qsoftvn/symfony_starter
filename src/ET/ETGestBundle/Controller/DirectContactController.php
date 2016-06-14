<?php

namespace ET\ETGestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ET\ETTicketBundle\Entity\Request as ETRequest;
use ET\ETTicketBundle\Form\RequestType as ETRequestForm;

use AppBundle\Helpers\Utils;

class DirectContactController extends Controller
{
    
    /**
     * Rewrite create new request page: amministrazione/etgest/crs.php
     * 
     * @Route("/etgest/contacts", name="etgest_direct_contact")
     */
    public function indexAction(Request $request)
    {      
        $newRequest = new ETRequest();
        $promoterArray = $this->get('doctrine')
                ->getRepository('ETUserBundle:Users')
                ->getPromotersByArrayCondition('ferie', array('attivo', 'in_corso'));

        $languageArray = $this->get('doctrine')
                ->getRepository('ETUserBundle:Traduzioni', 'agenti')
                ->getAvailableLanguage();
        
        $languageArrayChoices = array();
        if (count($languageArray) > 0) {
            foreach ($languageArray as $singleLanguage) {
                $languageArrayChoices[$singleLanguage] = $singleLanguage;
            }
        }
        
        $productArray = $this->get('doctrine')
                ->getRepository('ETBackofficeBundle:BackofficePortaliMercati', 'romano')
                ->getAvailableProduct();
                
        $otherProduct = array();
        $otherProduct['fcd'] = 'other';
        $otherProduct['nomeportale'] = $this->get('translator')->trans('Altro');
        $productArray[] = $otherProduct;
          
        $productArrayChoices = array();
        
        if (count($productArray) > 0) {
            foreach ($productArray as $singleProduct) {
                $productArrayChoices[$singleProduct['nomeportale']] = $singleProduct['fcd'];
            }
        }
        
        $form = $this->createForm(
            ETRequestForm::class, 
            $newRequest, 
            array(
                'promoterArray' => $promoterArray,
                'languageArrayChoices' => $languageArrayChoices,
                'productArrayChoices' => $productArrayChoices)
        );            

        $countryCodeArray = $this->get('doctrine')
                ->getRepository('\ET\ETGestBundle\Entity\Iso', 'idetus')
                ->getAvailableCountryCode();       
                
        
        $arrayNumberPeople = array();
        
        for ($i = 0; $i <= 10; $i++) {
            $arrayNumberPeople[] = $i;    
        }
        
        if ($request->isMethod('POST')) { 
            $allParameter = $request->request->all();

            $requestArray = $request->request->get('request');
            
            // These are already default value in database
            $requestArray['requestCampagna'] = 0;
            $requestArray['requestCanLink'] = 0;
            $requestArray['requestLinkedRequestId'] = 0;
            $requestArray['requestAnagraficaPromotoreId'] = 0;
            $requestArray['requestLoggedUsers'] = 0;            
            
            $requestArray['requestPackage'] = 'ET-GEST';
            $requestArray['requestCost'] = '';
            $requestArray['requestAnagraficaId'] = '';
            $requestArray['requestMailrif'] = '';
            $requestArray['requestComment'] = '';
            $requestArray['requestOffice'] = '';
            $requestArray['requestCountry'] = '';            
            $requestArray['requestAdults'] = 0;
            $requestArray['requestChildren'] = 0;
            $requestArray['requestChildrendetails'] = 0;
            $requestArray['requestDateAssignedPromotore'] = date('d/m/Y H:i:s'); 
            $requestArray['requestDate'] = date('d/m/Y H:i:s'); 
            $requestArray['requestAdults'] = $allParameter['adult'];
            $requestArray['requestChildren'] = $allParameter['baby'] + $allParameter['child'];
            $requestArray['requestChildrendetails'] = 'Children under 2 years: ' . $allParameter['baby'] . "\nChildren 2 - 12 years: " . $allParameter['child'];                       
            $requestArray['requestFcd'] = 'crsETGEST';
            $requestArray['requestPid'] = 0;
            $requestArray['requestPacchetonome'] = 'ET-GEST';
            $requestArray['requestPrpname'] = '';
            $requestArray['requestPrpid'] = 0;
            $requestArray['requestPrpmail'] = '';
            $requestArray['requestNewsletter'] = 1;
            $requestArray['requestOther'] = '';
            
            $noteArrayKeys = array(
                'locality' => $this->get('translator')->trans('Località'),
                'flexstartday' => $this->get('translator')->trans('Tolleranza giorni di anticipo o posticipo data'),
                'accommodation_type' => $this->get('translator')->trans('Tipologia di alloggio'),
                'room_type' => $this->get('translator')->trans('Sistemazione'),
                'adult' => $this->get('translator')->trans('Numero di adulti'),
                'baby' => $this->get('translator')->trans('Bambini sotto 2 anni'),
                'child' => $this->get('translator')->trans('Bambini da 2 a 12 anni'),
                'airport' => $this->get('translator')->trans('Aeroporto'),
                'note' => $this->get('translator')->trans('Note')
            );
            
            foreach ($noteArrayKeys as $k => $v) {
                if (isset($allParameter[$k])) {
                    if ($requestArray['requestOther']) {
                        $requestArray['requestOther'] .= "\n";
                    }
                    $requestArray['requestOther'] .= "$v = " . $allParameter[$k];
                }
            }

            if(!empty($requestArray['requestTel'])) {
                $requestArray['requestTel'] = $allParameter['telephone_country_code'] . "-" . $requestArray['requestTel'];    
                $requestArray['requestOther'] .= "\n" . $this->get('translator')->trans('Telefono') . ": " . $requestArray['requestTel'];
            }
            
            if(!empty($requestArray['requestCell'])) {
                $requestArray['requestCell'] = $allParameter['mobile_country_code'] . "-" . $requestArray['requestCell'];    
                $requestArray['requestOther'] .= "\n" . $this->get('translator')->trans('Cellulare') . ": " . $requestArray['requestCell'];
            }                        
            
            $nazione = '';
            
            if ($requestArray['requestLingua'] !== null) {
                switch (substr($requestArray['requestLingua'], 0, 2)) {
                    case 'it':
                        $nazione = 'ETIta';
                        break;
                    case 'es':
                        $nazione = 'ETESP';
                        break;
                    case 'en':
                        $nazione = 'ETUSA';
                        break;
                    default:
                        $nazione = 'ETIta';
                        break;
                }
            }    
            
            $findUserContracts = $this->get('doctrine')
                ->getRepository('ETUserBundle:UsersContratti')
                ->findBy(array('id' => $requestArray['requestMaildest'], 'agenzia' => $nazione));
            
            if (count($findUserContracts) <= 0) {
                $nazione = 'ETIta';
            }

            $requestArray['requestAgenzia'] = $nazione;
                        
            $allowed_chars = array(
                "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
                "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );

            do {
                $newRequestCode = date('y') . '-' . Utils::staticRandomFill($allowed_chars, 7);
                $requests = $this->get('doctrine')->getRepository('ETTicketBundle:Request', 'etticket')->findBy(array('requestCode' => $newRequestCode));
            } while (count($requests) > 0);

            $requestArray['requestCode'] = $newRequestCode;  
            
            // Request assign
            $not_allowed_users = array();
            $isReturningCustomer = FALSE;
            $assignedPromotoreId = 0;
            $anagraficaId = '';
            $result = $this->isReturningCustomer($request);
            
            $request->request->set('request', $requestArray);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {                
                $em = $this->getDoctrine()->getManager('etticket');
                $em->persist($newRequest);
                $em->flush();               
            }
            
            return $this->redirectToRoute('etgest_direct_contact_success');
        }

        return $this->render('etgest/direct-contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'countryCodeArray' => $countryCodeArray,
            'languageArray' => $languageArray,
            'productArray' => $productArray,
            'arrayNumberPeople' => $arrayNumberPeople,
            'form' => $form->createView(),
        ]);
    }
   
    /**
     * @Route("/etgest/contacts/success", name="etgest_direct_contact_success")
     */
    public function successAction(Request $request)
    { 
        return $this->render('etgest/direct-contact-success.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..')
        ]);
    }
    
}
