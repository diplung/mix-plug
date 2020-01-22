<?php

namespace diplung\MixPlug;

use Illuminate\Support\Facades\Facade;

class MixPlugFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mixplug';
    }
}
