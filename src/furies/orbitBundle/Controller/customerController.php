<?php

namespace furies\orbitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use furies\orbitBundle\Entity\Customers;
use Symfony\Component\HttpFoundation\Response;
/**
 * @Route("/orbit/customer")
 */
class customerController extends Controller
{
    /**
     * @Route("/newcustomer", name="_orbit_customer_newcustomer")
    */
    public function newcustomerAction(Request $request)
    {
  $em = $this->getDoctrine()->getManager();
       $newcustomer = new Customers();
	$form = $this->createFormBuilder($newcustomer)
		->add('doe', 'date', array('label' => 'Date of Enrol'))
		->add('title', 'text', array('label' => 'Title'))
		->add('name', 'text', array('label' => 'Customer Name'))
		->add('doorno', 'text')
		->add('address', 'text')
		->add('address1', 'text')
		->add('address2', 'text')
		->add('city', 'text')
		->add('pin', 'text')
		->add('mobile', 'text')
		->add('email', 'email')
		->add('custType', 'choice', array('choices' => array('R' => 'Residential', 'C' => 'Corporate' , 'B' =>'Both') , 'label' => 'Customer 			Type'))
		->add('cust_category', 'choice', array('choices' => array('G' => 'Good', 'F' => 'Fair' , 'P' =>'Poor') , 'label' => 'Customer Category'))

		->add('savec', 'submit', array('label' => 'Create Customer '))

	        ->getForm();


    $form->handleRequest($request);

    if ($form->isValid()) {
        // perform some action...
	$customer = $form->getData();
	$customer->setlive(true);
	$em->persist($customer);
        $em->flush();
	$customerid=$customer->getCustomersId();
return $this->render('furiesorbitBundle:customers:newcustomercreated.html.twig', array(
            'customerid'=>$customerid,
        ));
    }



return $this->render('furiesorbitBundle:customers:newcustomer.html.twig', array(
            'form' => $form->createView(),
        ));


    
    }

   

}
