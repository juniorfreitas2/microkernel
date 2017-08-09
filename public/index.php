<?php

use \Symfony\Component\HttpKernel\Kernel;
use \Symfony\Component\Config\Loader\LoaderInterface;
use \Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use \Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__ . "/vendor/autoload.php";
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

class appKernel extends Kernel{

    use MicroKernelTrait;

    public function registerBundles()
    {
        return [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle()
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
        $routes->mount('/', $routes->import(__DIR__."/../src/App/Controller/", 'annotation'));
    }

}

    $kernel = new appKernel('dev', true);
    $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
    $response = $kernel->handle($request);

    $response->send();

    $kernel->terminate($request, $response);
