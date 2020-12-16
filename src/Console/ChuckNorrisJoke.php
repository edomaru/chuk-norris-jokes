<?php

namespace Masaruedo\Jokes\Console;

use Illuminate\Console\Command;
use Masaruedo\Jokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'jokes';

    protected $description = 'Output a funny Chuck Norris joke.';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}