<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @author Michael Mifsud <info@tropotek.com>
 * @link http://www.tropotek.com/
 * @license Copyright 2019 Michael Mifsud
 */
class LoginController extends AbstractController
{

    public function __construct()
    {
    }


    /**
     *
     * @Route("/login", name="login")
     *
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function doDefault(Request $request)
    {
        return $this->render($this->getParameter('tk_theme_public') . '/login.html.twig', []);
    }

}