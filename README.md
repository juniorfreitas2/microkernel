<h2>MicroKernelTrait</h2>

<p>O MicroKernelTrait permite que você crie um aplicativo Symfony totalmente funcional em apenas um arquivo. Ele permite que você comece com um pequeno aplicativo e, em seguida, adicione recursos e estrutura como você precisa. Seu objetivo é dar-lhe o poder de escolher seus feixes e estrutura.</p>

<h2>Rotas e controllers</h2>

    @Route("/")
     
    public function index()
    {
        $name = 'Junior';
        return $this->render('index.html.twig', [$name => 'name']);
    }
<h2>Uso</h2>

    php -S localhost:8000 -t public

<h2>Importe outros componentes em:</h2>
    
    App
        -kernel.php
        
     public function registerBundles()
     {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle()
        ];

        if ($this->getEnvironment() == 'dev') {
            $bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }