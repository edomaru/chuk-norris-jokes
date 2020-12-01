<?php

namespace Masaruedo\ChuckNorrisJokes\Tests;

use Masaruedo\ChukNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chukNorrisJokes = [
            'Chuck Norris doesn\'t read books. He stares them down until he gets the information he wants.',
            'Time waits for no man. Unless that man is Chuck Norris.',
            'If you spell Chuck Norris in Scrabble, you win. Forever.',
            'Chuck Norris does not sleep. He waits.',
            'There is no chin behind Chuck Norris’ beard. There is only another fist.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chukNorrisJokes);
    }
}
