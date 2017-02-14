<?php

// src/AppBundle/Controller/InstagramController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class InstagramController
{
    /**
     * @Route("/instagram/auth")
     */
    public function authAction()
    {
        return new Response(
            'auth'
        );
    }

    /**
     * @Route("/instagram/auth/redirect")
     */
    public function authRedirectAction()
    {
        return new Response(
            'authRedirect'
        );
    }



}

?>