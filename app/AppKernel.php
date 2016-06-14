<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpFoundation\Request;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new ET\ETTicketBundle\ETTicketBundle(),
            new ET\ETGestBundle\ETGestBundle(),
            new ET\UserBundle\ETUserBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new ET\ETBackofficeBundle\ETBackofficeBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $request = Request::createFromGlobals();
        // Initialize config file name
        $configFileName = $this->getRootDir() . '/config/config_' . $this->getEnvironment();
        
        // Set domain environment attribute based on HTTP_HOST
        // We will use this attribute to load the config file and in many things to do
//        if (strpos($request->server->get('HTTP_HOST'), 'agenziaeu') !== false) {
            $request->attributes->set('domain_env', 'eu');
            $configFileName .= '.eu';
//        } else {
//            $request->attributes->set('domain_env', 'ita');
//        }
        
        $loader->load($configFileName . '.yml');
    }
    
}
