<?php

namespace App;

use Laravel\Lumen\Application;

class ApplicationCore extends Application
{
    /**
     * Get the path to the application "app" directory.
     *
     * @return string
     */
    public function path(): string
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'src';
    }
}
