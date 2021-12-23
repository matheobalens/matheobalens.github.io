<?php

namespace App\Controller;


use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        $mail = new Maol();


        if($form->isSubmitted() && $form->isValid()) {

            // On récupère les données du formulaire
            $formData = $form->getData();

            $content = "Bonjour, <br/>Vous avez une nouvelle demande de contact.<br/><hr>";
            $content .= "Nom du client :" .$formData['lastname']. "<br/>Prénom du client :" .$formData['firstname']. "<br/>Email du client : " .$formData['email']. "<br/>";
            $content .= "Contenu du message : " .$formData['content']. "<br/><hr>";


            $mail->send('matheobalens@gmail.com', 'Admin', 'Demande de contact', $content);

            $this->addFlash('success', 'Vore message a été envoyé');
            return $this->redirectToRoute('success');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'ContactController'
        ]);
    }

}