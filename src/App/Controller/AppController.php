<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AppController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response("Hello test");
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        return new Response("Hello test");
    }
}