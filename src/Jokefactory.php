<?php

namespace tfruehe2\ChuckNorrisJokes;

class JokeFactory
{
  protected $jokes = [
    'Chuck Norris\' tears cure cancer. Too bad her has never cried.',
    'Chuck Norris counted to infinity... Twice.',
    'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris
    you may be only seconds away from death.'
  ];

  public function __construct(array $jokes = null)
  {
    if ($jokes)
    {
      $this->jokes = $jokes;
    }

  }

  public function hello()
  {
    echo "Chuck Norris joke goes here";
  }

  public function getRandomJoke()
  {
    return $this->jokes[array_rand($this->jokes)];
  }
}
