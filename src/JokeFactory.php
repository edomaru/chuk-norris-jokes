<?php

namespace Masaruedo\ChukNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris doesn\'t read books. He stares them down until he gets the information he wants.',
        'Time waits for no man. Unless that man is Chuck Norris.',
        'If you spell Chuck Norris in Scrabble, you win. Forever.',
        'Chuck Norris does not sleep. He waits.',
        'There is no chin behind Chuck Norris’ beard. There is only another fist.'
    ];

    public function __construct(array $jokes = [])
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}