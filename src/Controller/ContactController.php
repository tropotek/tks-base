<?php

namespace App\Controller;

use App\Entity\Message;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @author Michael Mifsud <info@tropotek.com>
 * @link http://www.tropotek.com/
 * @license Copyright 2019 Michael Mifsud
 */
class ContactController extends AbstractController
{

    public function __construct()
    {
    }


    /**
     *
     * @Route("/contact", name="app_contact")
     *
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function doDefault(Request $request)
    {
        $message = new Message();

        $form = $this->createForm(\App\Form\ContactType::class, $message);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            dump($form->getData());

            $message = $form->getData();

            // send message



            // save message
            $this->getDoctrine()->getManager()->persist($message);
            $this->getDoctrine()->getManager()->flush();


            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            $this->addFlash('success', 'Your message has been successfully sent');
            return $this->redirectToRoute('app_contact');
        }

        return $this->render($this->getParameter('tk_theme_public') . '/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

}