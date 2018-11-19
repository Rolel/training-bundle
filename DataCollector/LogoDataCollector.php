<?php

namespace Smile\TrainingBundle\DataCollector;

use Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LogoDataCollector implements DataCollectorInterface
{
    /**
     * @var bool
     */
    private $trainingMode;

    public function __construct($trainingMode)
    {
        $this->trainingMode = $trainingMode;
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        // Collect... nothing !
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'smile_logo';
    }

    /**
     * @return bool
     */
    public function getTrainingMode()
    {
        return $this->trainingMode;
    }
    
    /**
     * @return bool
     */
    public function reset()
    {
        
    }
    
}
