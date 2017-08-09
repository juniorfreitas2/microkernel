<?php

require __DIR__."/vendor/autoload.php";

use \Symfony\Component\HttpKernel\Kernel;
use \Symfony\Component\Config\Loader\LoaderInterface;
use \Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;

class appKernel extends Kernel{

    use MicroKernelTrait;

    public function registerBundles()
    {
        return [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle()
        ];
    }

    protected function configureContainer(\Symfony\Component\DependencyInjection\ContainerBuilder $c, LoaderInterface $loader)
    {
        $c->loadFromExtension('framework', [
            'secret' => 'Secret_KEY',
        ]);
    }

    protected function configureRoutes(\Symfony\Component\Routing\RouteCollectionBuilder $routes)
    {
        $routes->add('/', 'Kernel:index');
    }

    public function index()
    {
        return new \Symfony\Component\HttpFoundation\Response('Hello Microkernel');
    }
}

    $kernel = new appKernel('dev', true);
    $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
    $response = $kernel->handle($request);

    $response->send();

    $kernel->terminate($request, $response);
