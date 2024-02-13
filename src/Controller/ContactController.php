<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contacts", name="contacts", methods={"GET"})
     */
    public function listeContacts(ContactRepository $repo): Response
    {
      
        // $manager = $this -> getDoctrine() -> getManager();
        // $repo = $manager -> getRepository(Contact::class);
        $contacts = $repo-> findAll();
            
        return $this->render('contact/listeContacts.html.twig', [
            'controller_name' => 'ContactController',
            'lesContacts' => $contacts
        ]);
    }
    /**
     * @Route("/contactsByName", name="contactsByName", methods={"GET"})
     */
    public function ContactByName(ContactRepository $repo): Response
    {
        $contactsByName = $repo ->  findByOrderedColumn("nom");
            
        return $this->render('contact/contactsByName.html.twig', [
            'controller_name' => 'ContactController',
            'contactsByName' => $contactsByName
        ]);
    }
    /**
     * @Route("/contactsByJob", name="contactsByJob", methods={"GET"})
     */
    public function contactsByJob(ContactRepository $repo): Response
    {
        $contactsByJob = $repo ->  findByOrderedColumn("job");
            
        return $this->render('contact/contactsByJob.html.twig', [
            'controller_name' => 'ContactController',
            'contactsByJob' => $contactsByJob
        ]);
    }
    /**
     * @Route("/contactsByFirstName", name="contactsByFirstName", methods={"GET"})
     */
    public function contactsByFirstName(ContactRepository $repo): Response
    {
        $contactsByFirstName = $repo ->  findByOrderedColumn("prenom");
            
        return $this->render('contact/contactsByFirstName.html.twig', [
            'controller_name' => 'ContactController',
            'contactsByFirstName' => $contactsByFirstName
        ]);
    }
    /**
     * @Route("/contactsByPhone", name="contactsByPhone", methods={"GET"})
     */
    public function contactsByPhone(ContactRepository $repo): Response
    {
        $contactsByPhone = $repo ->  findByOrderedColumn("phone_num");
            
        return $this->render('contact/contactsByPhone.html.twig', [
            'controller_name' => 'ContactController',
            'contactsByPhone' => $contactsByPhone
        ]);
    }
    /**
     * @Route("/contactsByCompany", name="contactsByCompany", methods={"GET"})
     */
    public function contactsByCompany(ContactRepository $repo): Response
    {
        $contactsByCompany = $repo ->  findByOrderedColumn("company_name");
            
        return $this->render('contact/contactsByCompany.html.twig', [
            'controller_name' => 'ContactController',
            'contactsByCompany' => $contactsByCompany
        ]);
    }
}
