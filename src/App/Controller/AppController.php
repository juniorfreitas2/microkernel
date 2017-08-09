<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new \Symfony\Component\HttpFoundation\Response('Hello Microkernel');
    }
}