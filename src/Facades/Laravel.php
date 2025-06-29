<?php

namespace HardImpact\Liftoff\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HardImpact\Liftoff\Laravel
 */
class Laravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HardImpact\Liftoff\Laravel::class;
    }
}
