<?php

namespace MarcosWillian\ShippingCalculator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcosWillian\ShippingCalculator\Skeleton\SkeletonClass
 */
class ShippingCalculatorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shipping-calculator';
    }
}
