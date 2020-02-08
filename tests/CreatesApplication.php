<?php

namespace Tests;

use Faker\Factory;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * Create a Faker Generator instance.
     *
     * @return \Faker\Generator
     */
    public function faker()
    {
        return Factory::create();
    }
}
