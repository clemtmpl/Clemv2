<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use PharIo\Manifest\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    public function new(): Response
    {
        // creates a task object and initializes some data for this example
        $contact = new Contact();
        $contact->setName('Your name');
        $contact->setEmail('Your email');
        $contact->setSubject('Object message');
        $contact->setText('Your message');

        $form = $this->createForm(ContactType::class, $contact);
        return $this->renderForm('contact-form.html.twig', [
            'form' => $form,
        ]);

        // ...
    }
}