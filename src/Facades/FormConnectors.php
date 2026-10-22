<?php

namespace Somoscuatro\FormsToWherever\Facades;

use Illuminate\Support\Facades\Facade;
use Somoscuatro\FormsToWherever\ConnectorManager;

class FormConnectors extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ConnectorManager::class;
    }
}
