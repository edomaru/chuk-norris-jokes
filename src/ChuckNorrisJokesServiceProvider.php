<?php

namespace Masaruedo\ChukNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Masaruedo\ChukNorrisJokes\JokeFactory;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function register()
    {
        dd('oye');
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}