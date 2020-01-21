<?php

namespace GeneralSystemsVehicle\InOneEar\Tests;

use Orchestra\Testbench\TestCase;
use GeneralSystemsVehicle\InOneEar\InOneEarServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [InOneEarServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
