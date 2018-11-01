<?php

namespace Doctordogg\HelloWorldVMMV\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\ObjectManagerInterface;
use \Doctordogg\HelloWorldVMMV\Model\Container;

class Testbed extends Command
{
    protected $objectManager;

    private function round($time)
    {
        return round(($time * 1000), 4);
    }

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
        parent::__construct();
    }

    protected function getObjectManager()
    {
        return $this->objectManager;
    }

    protected function configure()
    {
        $this->setName('ps:doctor-proxy');
        $this->setDescription('Some description');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->createContainer($output);
        $this->sayHelloWithFastObject($container, $output);
        $this->sayHelloWithSlowObject($container, $output);
    }

    protected function createContainer(OutputInterface $output) : Container
    {
        $objectManager = $this->getObjectManager();
        $time = microtime(true);
        $container = $objectManager->get('Doctordogg\HelloWorldVMMV\Model\Container');
        $toLoad = microtime(true) - $time;
        $output->writeln('Created service, approximate time to load: ' . $this->round($toLoad) . 'ms' );
        $output->writeln('');

        return $container;
    }

    /**
     * @param Container $container
     * @param OutputInterface $output
     */
    protected function sayHelloWithFastObject(Container $container, OutputInterface $output)
    {
        $output->writeln('Say Hello with fast object');
        $time = microtime(true);
        $output->writeln($container->getHelloWithFastObject());
        $toRun = microtime(true) - $time;
        $output->writeln('Time: ' . $this->round($toRun) . ' ms');
        $output->writeln('');
    }

    /**
     * @param Container $container
     * @param OutputInterface $output
     */
    protected function sayHelloWithSlowObject(Container $container, OutputInterface $output)
    {
        $output->writeln('Say Hello with slow object');
        $time = microtime(true);
        $output->writeln($container->getHelloWithSlowObject());
        $toRun = microtime(true) - $time;
        $output->writeln('Time: ' . $this->round($toRun) . ' ms');
        $output->writeln('');
    }


}
