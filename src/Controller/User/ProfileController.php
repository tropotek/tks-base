<?php

namespace App\Controller\User;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @author Michael Mifsud <info@tropotek.com>
 * @link http://www.tropotek.com/
 * @license Copyright 2019 Michael Mifsud
 */
class ProfileController extends AbstractController
{

    public function __construct()
    {
    }


    /**
     *
     * @Route("/user/profile", name="user_profile")
     *
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function doDefault(Request $request)
    {
        return $this->render($this->getParameter('tk_theme_public') . '/user/profile.html.twig');
    }

}