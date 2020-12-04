<?php

namespace Masaruedo\ChukNorrisJokes;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}