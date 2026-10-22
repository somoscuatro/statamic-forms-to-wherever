<?php

namespace Somoscuatro\FormsToWherever\Tests;

use Somoscuatro\FormsToWherever\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;
}
