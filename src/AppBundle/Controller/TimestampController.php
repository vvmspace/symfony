<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TimestampController
{
    /**
     * @Route("/timestamp")
     */
    public function indexAction()
    {
        return new Response(
            time()
        );
    }

    /**
     * @Route("/timestamp.json")
     */
    public function jsonAction(){
        return new Response(
            json_encode(array('timestamp' => time()))
        );
    }
}

?>