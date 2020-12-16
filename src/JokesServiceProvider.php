<?php

namespace Masaruedo\Jokes;

use Masaruedo\Jokes\JokeFactory;
use Illuminate\Support\ServiceProvider;
use Masaruedo\Jokes\Console\ChuckNorrisJoke;

class JokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }    
    }

    public function register()
    {
        $this->app->bind('jokes', function () {
            return new JokeFactory();
        });
    }
}
