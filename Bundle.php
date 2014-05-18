<?php


namespace SoPhp\Bundle\Calculator;


use SoPhp\Framework\Activator\ActivatorInterface;
use SoPhp\Framework\Activator\Context\Context;
use SoPhp\Framework\Bundle\AutoloaderProviderInterface;
use SoPhp\Framework\Bundle\BundleInterface;

class Bundle implements BundleInterface {
    /** @var  Context */
    protected $context;
    /** @var  ActivatorInterface */
    protected $activator;

    /**
     * @param Context $context
     */
    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
        return $this->context;
    }

}