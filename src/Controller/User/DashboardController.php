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
class DashboardController extends AbstractController
{

    public function __construct()
    {
    }


    /**
     *
     * @Route("/user/", name="user_dashboard")
     * @Route("/user/dashboard", name="user_dashboard_index")
     *
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function doDefault(Request $request)
    {
        return $this->render($this->getParameter('tk_theme_public') . '/user/dashboard.html.twig');
    }

}