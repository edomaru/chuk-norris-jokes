<?php

namespace Masaruedo\ChukNorrisJokes;

use Illuminate\Support\ServiceProvider;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('jokes', function () {
            return new JokeFactory();
        });
    }
}