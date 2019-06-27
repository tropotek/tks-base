<?php
namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SettingsController extends AbstractController
{

    /**
     * @Route("/admin/settings", name="admin_settings")
     */
    public function manager(Request $request)
    {
        $settings = $this->getDoctrine()->getRepository(\App\Entity\Settings::class)->find(1);

        $form = $this->createForm(\App\Form\SettingsType::class, $settings);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated

            $settings1 = $form->getData();



            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();


            return $this->redirectToRoute('admin_settings');
        }




        return $this->render('unify-admin/settings.html.twig', [
            'form' => $form->createView()
        ]);
    }
}